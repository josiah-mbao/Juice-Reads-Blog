#!/bin/bash

# Function to display usage
usage() {
  echo "Usage: $0 -m \"commit message\" [--nopush]"
  echo "  -m   Commit message (required)"
  echo "  --nopush   Skip pushing to the remote repository (optional)"
  exit 1
}

# Parse arguments
commit_message=""
skip_push=false

while [[ "$#" -gt 0 ]]; do
  case $1 in
    -m)
      commit_message="$2"
      shift 2
      ;;
    --nopush)
      skip_push=true
      shift
      ;;
    *)
      usage
      ;;
  esac
done

# Ensure commit message is provided
if [[ -z "$commit_message" ]]; then
  echo "Error: Commit message is required."
  usage
fi

# Run Git commands
echo "Checking the current branch..."
current_branch=$(git branch --show-current)
if [[ -z "$current_branch" ]]; then
  echo "Error: Not in a Git repository or no branch detected."
  exit 1
fi
echo "You are on branch: $current_branch"

read -p "Do you want to continue? (y/n): " confirm
if [[ $confirm != "y" ]]; then
  echo "Aborting."
  exit 1
fi

echo "Running git status..."
git status || { echo "Failed to run git status"; exit 1; }

echo "Adding all changes..."
git add . || { echo "Failed to add changes"; exit 1; }

echo "Committing with message: \"$commit_message\""
git commit -m "$commit_message" || { echo "Failed to commit changes"; exit 1; }

if [[ "$skip_push" == false ]]; then
  echo "Pushing to remote..."
  git push || { echo "Failed to push changes"; exit 1; }
else
  echo "Skipping push to remote as requested."
fi

echo "Done!"
