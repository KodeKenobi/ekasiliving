#!/bin/bash
set -e

# Start the HTTP server to serve your Vue.js app
serve -s /app/dist -l 3000 >> /proc/1/fd/1 2>> /proc/1/fd/2
