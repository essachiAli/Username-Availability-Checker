# Phase 2 — Project 2: Username Availability Checker (Laravel + Vanilla JS)

**Goal:** Real-time username availability check via AJAX GET request.  
Production-ready: debounced, secure, fast feedback, accessible.

## Features

- Single username input field
- On `input` event (debounced 400ms) → AJAX GET to `/check-username`
- Immediate feedback:  
  - “Checking…”  
  - “Available” (green)  
  - “Taken” (red)  
- Minimum 3 characters required
- Handles spaces/trim automatically
- No page reload

## Tech Stack

- Laravel 12
- Vanilla JS + `fetch()`
- Tailwind CSS (Vite)
- Pure AJAX (no Livewire/Alpine yet)

## Step 1: Migration & Model

```bash
composer create-project laravel/laravel username-availability-checker
php artisan make:migration create_users_table --create=users