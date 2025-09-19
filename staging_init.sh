#!/usr/bin/env bash
#
# setup_staging.sh — Initialize staging environment and clean up
# Fri Sep 19 11:33:00 EEST 2025
#

set -euo pipefail

# — Configuration —
REPO_URL="https://raw.githubusercontent.com/Digital-Challenge/public/master"
PHP_SCRIPT="staging_init.php"
SH_SCRIPT="$(basename "$0")"
TMP_PATH="$(mktemp /tmp/${PHP_SCRIPT}.XXXXXX)"

# — Cleanup function —
cleanup() {
  echo "Cleaning up..."
  #rm -f "${PHP_SCRIPT}" "${SH_SCRIPT}"
}
trap cleanup EXIT

# — 1) Download PHP script to root —
echo "Downloading ${PHP_SCRIPT}..."
wget -q -O "${TMP_PATH}" "${REPO_URL}/${PHP_SCRIPT}"
mv "${TMP_PATH}" "./${PHP_SCRIPT}"
chmod 644 "./${PHP_SCRIPT}"

# — 2) Execute PHP script —
echo "Running ${PHP_SCRIPT}..."
#php "./${PHP_SCRIPT}" --env=staging

# — 3) Exit (trap will clean up) —
echo "Staging initialization complete."
exit 0
