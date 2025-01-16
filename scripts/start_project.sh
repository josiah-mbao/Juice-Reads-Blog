#!/bin/bash

echo "Welcome to Juice's script"
echo "I made this to automate some of my dev workflows"
echo "Type shiii"

echo "Starting the php development server..."
php artisan serve &

echo "Starting the vite/npm server..."
npm run dev &

# Open the browser
echo "Opening browser..."
sleep 2 # Give the servers a moment to start
open http://127.0.0.1:8000
