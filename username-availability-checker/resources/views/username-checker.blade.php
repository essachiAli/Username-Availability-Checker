<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Username Availability Checker</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-gray-50 flex items-center justify-center p-4">
    <div class="max-w-md w-full">
        <h1 class="text-3xl font-bold text-center text-gray-800 mb-10">
            Username Availability Checker
        </h1>

        <div class="bg-white rounded-xl shadow-lg p-8 space-y-6">
            <div>
                <label for="username" class="block text-sm font-medium text-gray-700 mb-2">
                    Username
                </label>
                <input
                    type="text"
                    id="username"
                    name="username"
                    minlength="3"
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500"
                    placeholder="Enter username"
                    autocomplete="off"
                >
                <div id="status" class="mt-3 text-sm font-medium" aria-live="polite">
                    <!-- Feedback here -->
                </div>
            </div>
        </div>
    </div>
</body>
</html>
