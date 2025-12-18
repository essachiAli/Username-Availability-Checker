import './bootstrap';
document.addEventListener('DOMContentLoaded', () => {
    const input = document.getElementById('username');
    const status = document.getElementById('status');

    if (!input || !status) return;

    let debounceTimer;

    const checkUsername = async (value) => {
        value = value.trim();

        if (value.length < 3) {
            status.textContent = 'Minimum 3 characters required';
            status.className = 'mt-3 text-sm font-medium text-gray-500';
            return;
        }

        status.textContent = 'Checking...';
        status.className = 'mt-3 text-sm font-medium text-indigo-600';

        try {
            const response = await fetch(`/check-username?username=${encodeURIComponent(value)}`, {
                headers: {
                    'Accept': 'application/json',
                    'X-Requested-With': 'XMLHttpRequest',
                },
            });

            if (!response.ok) throw new Error('Network error');

            const data = await response.json();

            status.textContent = data.message;
            status.className = data.available
                ? 'mt-3 text-sm font-medium text-green-600'
                : 'mt-3 text-sm font-medium text-red-600';
        } catch (err) {
            status.textContent = 'Error checking availability';
            status.className = 'mt-3 text-sm font-medium text-red-600';
            console.error(err);
        }
    };

    input.addEventListener('input', (e) => {
        clearTimeout(debounceTimer);
        debounceTimer = setTimeout(() => checkUsername(e.target.value), 400);
    });

    // Clear on empty
    input.addEventListener('input', (e) => {
        if (e.target.value.trim() === '') {
            status.textContent = '';
        }
    });
});
