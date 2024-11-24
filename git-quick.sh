#!/bin/bash

# Parse the commit message from the -m flag
while getopts "m:" opt; do
  case $opt in
    m) commit_message="$OPTARG" ;;
    *) echo "Usage: $0 -m \"commit message\"" >&2; exit 1 ;;
  esac
done

# Check if the commit message is provided
if [ -z "$commit_message" ]; then
  echo "Error: Commit message is required."
  echo "Usage: $0 -m \"commit message\""
  exit 1
fi

# Run Git commands
echo "Running git status..."
git status

echo "Adding all changes..."
git add .

echo "Committing with message: \"$commit_message\""
git commit -m "$commit_message"

echo "Pushing to remote..."
git push

echo "Done!"
