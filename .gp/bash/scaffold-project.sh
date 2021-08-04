#!/bin/bash
# shellcheck source=/dev/null
#
# SPDX-License-Identifier: MIT
# Copyright © 2021 Apolo Pena
#
# scaffold-project.sh
# Description:
# Creates the main Laravel 8 project scaffolding.
#
# Notes:
# This script assumes it is being run from .gitpod.Dockerfile and
# that all of this scripts dependencies have already been copied to /tmp

_log='/var/log/workspace-image.log'
_scaff_name='project-starter'
_scaff_dest="/home/gitpod/$_scaff_name"

echo "BEGIN: Scaffolding Project" | tee -a $_lo
mkdir -p "$_scaff_dest"
chown -R gitpod:gitpod "$_scaff_dest"
cd "$_scaff_dest" || exit 1
echo "  SUCCESS: create and moved into $_scaff_dest" | tee -a $_log

# Handle optional install of phpmyadmin
install_phpmyadmin=$(. /tmp/utils.sh parse_ini_value /tmp/starter.ini phpmyadmin install);
if [[ $install_phpmyadmin -eq 1 ]]; then
  mkdir -p "$_scaff_dest/public"
  chown -R gitpod:gitpod "$_scaff_dest/public"
  echo "  Installing phpmyadmin"  | tee -a $_log
  cd "$_scaff_dest/public" && composer create-project phpmyadmin/phpmyadmin
  _exitcode_phpmyadmin=$?
  if [ $_exitcode_phpmyadmin -eq 0 ]; then
    chown -R gitpod:gitpod "$_scaff_dest/public/phpmyadmin"
    echo "  SUCCESS: phpmyadmin installed to $_scaff_dest/public"  | tee -a $_log
  else
    >&2 echo "  ERROR $?: phpmyadmin failed to install" | tee -a $_log
  fi
fi
echo "END: Scaffolding Project" | tee -a $_log
