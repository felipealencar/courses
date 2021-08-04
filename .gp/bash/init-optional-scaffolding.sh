#!/bin/bash
#
# SPDX-License-Identifier: MIT
# Copyright © 2021 Apolo Pena
#
# init-optional-scaffolding.sh
# Description:
# Installs frontend scaffolding, optional EXAMPLES and other packages as per the values set in starter.ini

# Load logger
. .gp/bash/workspace-init-logger.sh

# Load spinner
. .gp/bash/spinner.sh

parse="bash .gp/bash/utils.sh parse_ini_value starter.ini"

install_phpmyadmin=$(eval "$parse" phpmyadmin install)
init_phpmyadmin=".gp/bash/init-phpmyadmin.sh"

if [[ $(bash .gp/bash/helpers.sh is_inited) == 0 ]]; then
  # Install phpMyAdmin if needed
  if [[ $install_phpmyadmin == 1 ]];then
      # shellcheck source=.gp/bash/init-phpmyadmin.sh
      . "$init_phpmyadmin" 2>/dev/null || log_silent -e "ERROR: $(. $init_phpmyadmin 2>&1 1>/dev/null)"
  fi
fi
