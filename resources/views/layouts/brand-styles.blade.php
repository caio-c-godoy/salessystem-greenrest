<!-- Brand theme -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
<style>
    :root {
        --green-900: #0b2f26;
        --green-700: #125c4b;
        --green-500: #18bfa0;
        --green-300: #c3efe4;
        --sand: #f5f1e9;
        --text: #1a1a17;
        --muted: #51514d;
    }
    * { box-sizing: border-box; }
    body {
        margin: 0;
        font-family: "Poppins", system-ui, -apple-system, sans-serif;
        color: var(--text);
        background: #f6faf8;
        line-height: 1.6;
    }
    a { color: inherit; text-decoration: none; }
.page-container { max-width: 1200px; margin: 0 auto; padding: 0 24px; }
    .brand-tag {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        padding: 8px 12px;
        border-radius: 12px;
        background: var(--green-300);
        color: var(--green-900);
        font-weight: 600;
    }
    .pill {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 8px 12px;
        border-radius: 999px;
        background: #fff;
        border: 1px solid #e3e8e4;
        box-shadow: 0 6px 16px rgba(11, 47, 38, 0.08);
        font-weight: 500;
        color: var(--green-900);
    }
    .brand-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        padding: 12px 16px;
        border-radius: 12px;
        font-weight: 600;
        border: none;
        cursor: pointer;
        transition: transform 0.15s ease, box-shadow 0.2s ease, background 0.2s ease;
        text-decoration: none;
    }
    .brand-btn.primary {
        background: linear-gradient(120deg, var(--green-700), var(--green-500));
        color: #fff;
        box-shadow: 0 12px 30px rgba(18, 92, 75, 0.25);
    }
    .brand-btn.secondary {
        background: #fff;
        color: var(--green-700);
        border: 1px solid #dfe8e4;
        box-shadow: 0 10px 24px rgba(11, 47, 38, 0.08);
    }
    .brand-btn:hover { transform: translateY(-2px); }
    .glass-card {
        background: #fff;
        border-radius: 18px;
        border: 1px solid #e3e8e4;
        box-shadow: 0 18px 50px rgba(11, 47, 38, 0.1);
    }
    input[type="text"],
    input[type="email"],
    input[type="password"],
    input[type="number"],
    select,
    textarea {
        border: 1px solid #dfe8e4;
        border-radius: 12px;
        padding: 12px 14px;
        background: #fff;
        color: var(--text);
        width: 100%;
    }
input:focus, select:focus, textarea:focus {
        outline: 2px solid var(--green-300);
        border-color: var(--green-500);
        box-shadow: 0 0 0 3px rgba(24, 191, 160, 0.15);
    }
    .brand-btn.fluid { width: 100%; justify-content: center; }
    @media (max-width: 768px) {
        .page-container { padding: 0 16px; }
        .glass-card { border-radius: 14px; }
    }
</style>
