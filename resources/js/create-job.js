// Untuk Step 1
document.getElementById('job-form-step-1').addEventListener('submit', async (e) => {
    e.preventDefault();
    const formData = new FormData(e.target);

    const response = await fetch('/admin/create-job/step-1', {
        method: 'POST',
        body: formData,
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
        },
    });

    const result = await response.json();
    if (response.ok) {
        localStorage.setItem('jobId', result.job_id);
        window.location.href = '/admin/create-job/step-2';
    } else {
        alert('Error: ' + result.message);
    }
});

// Untuk Step 2
document.getElementById('job-form-step-2').addEventListener('submit', async (e) => {
    e.preventDefault();
    const formData = new FormData(e.target);
    const jobId = localStorage.getItem('jobId');

    const response = await fetch(`/admin/create-job/step-2/${jobId}`, {
        method: 'POST',
        body: formData,
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
        },
    });

    const result = await response.json();
    if (response.ok) {
        alert('Job successfully created!');
        window.location.href = '/admin/jobs';
    } else {
        alert('Error: ' + result.message);
    }
});
