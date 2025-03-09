document.getElementById('contactForm').addEventListener('submit', async function(e) {
    e.preventDefault();
    
    const form = this;
    const submitButton = form.querySelector('#submitButton');
    const formMessage = document.getElementById('formMessage');
    const errorSpans = form.querySelectorAll('[data-error]');
    
    // Reset error messages
    errorSpans.forEach(span => span.classList.add('hidden'));
    formMessage.classList.add('hidden');
    
    // Disable submit button
    submitButton.disabled = true;
    submitButton.textContent = 'Sender...';
    
    try {
        const response = await fetch('/contact', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value
            },
            body: JSON.stringify({
                name: form.name.value,
                email: form.email.value,
                phone: form.phone.value,
                message: form.message.value
            })
        });
        
        const data = await response.json();
        
        if (response.ok) {
            // Success
            formMessage.textContent = data.message;
            formMessage.classList.remove('hidden', 'bg-red-100', 'text-red-700');
            formMessage.classList.add('bg-green-100', 'text-green-700');
            form.reset();
        } else {
            // Validation errors
            if (data.errors) {
                Object.keys(data.errors).forEach(field => {
                    const errorSpan = form.querySelector(`[data-error="${field}"]`);
                    if (errorSpan) {
                        errorSpan.textContent = data.errors[field][0];
                        errorSpan.classList.remove('hidden');
                    }
                });
            }
            
            formMessage.textContent = data.message || 'Der skete en fejl. Prøv venligst igen.';
            formMessage.classList.remove('hidden', 'bg-green-100', 'text-green-700');
            formMessage.classList.add('bg-red-100', 'text-red-700');
        }
    } catch (error) {
        formMessage.textContent = 'Der skete en fejl. Prøv venligst igen.';
        formMessage.classList.remove('hidden', 'bg-green-100', 'text-green-700');
        formMessage.classList.add('bg-red-100', 'text-red-700');
    }
    
    // Re-enable submit button
    submitButton.disabled = false;
    submitButton.textContent = 'Send besked';
});