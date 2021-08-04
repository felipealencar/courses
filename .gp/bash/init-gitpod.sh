#!/bin/bash
#
# SPDX-License-Identifier: MIT
# Copyright © 2021 Apolo Pena
#
# init-gitpod.sh
# Description:
# Tasks to be run when a gitpod workspace is created for the first time.

# Load logger
. .gp/bash/workspace-init-logger.sh

# Load spinner
. .gp/bash/spinner.sh

# Let the user know there will be a wait, then begin once MySql is initialized.
start_spinner "Initializing MySql..." &&
gp await-port 3306 &&
stop_spinner $?

# BEGIN: Update npm if needed
target_npm_ver='^7'
min_target_npm_ver='7.11.1'
current_npm_ver=$(npm -v)
update_npm=$(bash .gp/bash/utils.sh comp_ver_lt "$current_npm_ver" "$min_target_npm_ver")
if [[ $update_npm == 1 ]]; then
  msg="Updating npm from $current_npm_ver to"
  log_silent "$msg $target_npm_ver" && start_spinner "$msg $target_npm_ver"
  npm install -g "npm@$target_npm_ver" &>/dev/null
  err_code=$?
  if [ $err_code != 0 ]; then
    stop_spinner $err_code
    log -e "ERROR $?: $msg a version >= $min_target_npm_ver"
  else
    stop_spinner $err_code
    log_silent "SUCCESS: $msg $(npm -v)"
  fi
fi
# END: Update npm if needed

# BEGIN: init tasks
if [[ $(bash .gp/bash/helpers.sh is_inited) == 0 ]]; then
  # rsync any new project files from the docker image to the repository
  msg="rsync from ~/project-starter to $GITPOD_REPO_ROOT"
  log_silent "$msg" && start_spinner "$msg"
  shopt -s dotglob
  grc -c .gp/conf/grc/rsync-stats.conf \
  rsync -rlptgoD --ignore-existing --stats --human-readable /home/gitpod/project-starter/ "$GITPOD_REPO_ROOT"
  err_code=$?
  if [ $err_code != 0 ]; then
    stop_spinner $err_code
    log -e "ERROR: $msg"
  else
    stop_spinner $err_code
    log_silent "SUCCESS: $msg"
  fi
  # Move, rename or merge any project files that need it
  [[ -f "LICENSE" && -d ".gp" && ! -f .gp/LICENSE ]] && mv -f LICENSE .gp/LICENSE
  [[ -f "README.md" && -d ".gp" && ! -f .gp/README.md ]] && mv -f README.md .gp/README.md
  [[ -f "CHANGELOG.md" && -d ".gp" && ! -f .gp/CHANGELOG.md ]] && mv -f CHANGELOG.md .gp/CHANGELOG.md

  # Remove potentially cached phpmyadmin installation if phpmyadmin should not be installed
  if [ "$(bash .gp/bash/utils.sh parse_ini_value starter.ini phpmyadmin install)" == 0 ]; then
    [ -d "public/phpmyadmin" ] && rm -rf public/phpmyadmin
  fi
fi
# END: init tasks
