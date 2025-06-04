<?php
include 'lib/connect.php';
include 'lib/helpers.php';

$statusData = getDbConnectionStatus();
?>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP VERCEL</title>
    <link rel="icon"
        href="https://raw.githubusercontent.com/AnwarAchilles/VTuber-Style-Logos/main/php-new/default.png"
        type="image/png">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Google+Sans:wght@400;700&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        secondary: '#49598D',
                    },
                },
            },
            plugins: [
                function({
                    addBase,
                    theme
                }) {
                    addBase({
                        '::-webkit-scrollbar': {
                            width: '12px',
                        },
                        '::-webkit-scrollbar-track': {
                            background: '#1B222A',
                        },
                        '::-webkit-scrollbar-thumb': {
                            background: '#15181D',
                            borderRadius: '3px',
                        },
                        '::-webkit-scrollbar-corner': {
                            background: '#1B222A',
                        },
                    });
                },
            ],
        }
    </script>
    <style>
        * {
            font-family: 'Google Sans', sans-serif;
            font-weight: 700;
            color: white;
        }
    </style>
</head>

<body class="font-sans text-gray-800  min-h-screen bg-[#1B222A]">
    <div class="max-w-7xl mx-auto p-4 sm:p-6 lg:p-8">
        <header class="shadow-md rounded-lg p-6 mb-4 bg-[#15181D] flex flex-col justify-center items-center">
            <img src="<?php echo getStaticPath('https://raw.githubusercontent.com/AnwarAchilles/VTuber-Style-Logos/main/php-new/default.png'); ?>"
                class="w-40">
            <h1 class="text-3xl font-bold text-center text-secondary mt-4">PHP on Vercel</h1>
        </header>
        <main class="space-y-5">
            <section class=" shadow-md rounded-lg p-6 bg-[#15181D]">
                <h2 class="text-2xl font-semibold mb-4 text-secondary">RESPONSE HEADERS</h2>
                <pre class=" p-0 rounded-md text-sm overflow-x-auto">
<?php
$headers = headers_list();

foreach ($headers as $header) {
    echo $header . "\n";
}
?>
                </pre>
            </section>

            <section class=" shadow-md rounded-lg p-6 bg-[#15181D]">
                <h2 class="text-2xl font-semibold mb-4 text-secondary">CLONE REPOSITORY</h2>
                <ol class="list-decimal pl-6 text-white mb-4">
                    <li><code class="bg-[#1C232B] px-1 rounded">git clone https://github.com/RevanSP/PHP-VERCEL-EXAMPLE.git</code></li>
                    <li><code class="bg-[#1C232B] px-1 rounded">cd PHP-VERCEL-EXAMPLE</code></li>
                    <li><code class="bg-[#1C232B] px-1 rounded">cp .env.example .env</code></li>
                </ol>
            </section>

            <section class="shadow-md rounded-lg p-6 bg-[#15181D]">
                <h2 class="text-2xl font-semibold mb-4 text-secondary">TESTING YOUR API</h2>
                <p class="mb-4">
                    To test your newly created REST API, visit the <code
                        class="bg-[#1C232B] px-1 rounded">/api/status</code> route on Vercel.
                </p>
                <p class="mb-4">
                    Example URL: <code
                        class="bg-[#1C232B] px-1 rounded">https://php-vercel-preview.vercel.app/api/status</code>
                </p>
                <p class="mb-4">Expected JSON response:</p>
                <pre class="p-4 rounded-md text-sm overflow-x-auto">
{
  "X-Powered-By": "'PHP/' . phpversion()",
  "database": {
    "status": "'Connected successfully!/Connected failed!'",
    "version": "'$conn->server_info'",
    "host": "'$host'",
    "database": "'$database'"
  }
}
</pre>
            </section>

            <section class="shadow-md rounded-lg p-6 bg-[#15181D]">
                <h2 class="text-2xl font-semibold mb-4 text-secondary">CONNECT WITH MYSQL (FREE)</h2>
                <p class="mb-4">
                    This free service allows you to connect to a remote MySQL database for testing purposes. Please note
                    that this is not intended for production use, but it provides an easy way to experiment and test
                    your database connections.
                </p>
                <p class="mb-4">
                    The free tier includes the following resources:
                </p>
                <ul class="list-disc pl-6 text-white mb-4">
                    <li>1 MySQL Database</li>
                    <li>25 MB Storage</li>
                    <li>Limited Queries</li>
                    <li>Email Support</li>
                    <li>Remote MySQL Access</li>
                </ul>
                <p class="mb-4">
                    To set it up, follow these steps:
                </p>
                <ol class="list-decimal pl-6 text-white mb-4">
                    <li>
                        <strong>Register an account:</strong>
                        Visit <a href="https://freedb.tech/register.html"
                            class="text-secondary">https://freedb.tech/register.html</a> and register using your email,
                        or create a dummy account through <a href="https://temporary-mail-generator.vercel.app"
                            class="text-secondary">https://temporary-mail-generator.vercel.app</a>.
                    </li>
                    <li>
                        <strong>Verify your email:</strong>
                        After registration, check your email to verify your account.
                    </li>
                    <li>
                        <strong>Create a database and user:</strong>
                        Go to your <a href="https://freedb.tech/dashboard/"
                            class="text-secondary">https://freedb.tech/dashboard</a> to create a new database and user.
                        Then, update <code class="bg-[#1C232B] px-1 rounded">.env</code> file in your PHP
                        project and update <code class="bg-[#1C232B] px-1 rounded">.env</code> in Vercel your PHP
                        project settings.
                        <pre class="p-4 rounded-md text-sm overflow-x-auto">
DB_HOST=sql.freedb.tech
DB_PORT=3306
DB_DATABASE=                // Add your DATABASE NAME here
DB_USERNAME=                // Add your DATABASE USER here
DB_PASSWORD=                // Add your PASSWORD here
                        </pre>
                    </li>
                    <li>
                        <strong>Access phpMyAdmin:</strong>
                        Visit <a href="https://phpmyadmin.freedb.tech/"
                            class="text-secondary">https://phpmyadmin.freedb.tech</a>, and log in using the server,
                        username, and password you just created in the <a href="https://freedb.tech/dashboard/"
                            class="text-secondary">https://freedb.tech/dashboard</a>.
                    </li>
                    <li>
                        <strong>Import your local database (optional):</strong>
                        If you have an existing SQL database, you can export it from your local phpMyAdmin and import
                        the <code class="bg-[#1C232B] px-1 rounded">.sql</code> file into your remote database on
                        phpMyAdmin at <a href="https://phpmyadmin.freedb.tech/"
                            class="text-secondary">https://phpmyadmin.freedb.tech</a>.
                    </li>
                </ol>
            </section>

            <section class=" shadow-md rounded-lg p-6 bg-[#15181D]">
                <h2 class="text-2xl font-semibold mb-4 text-secondary">DATABASE STATUS</h2>
                <?php if (isset($statusData['status'])): ?>
                    <?php if (strpos($statusData['status'], 'successfully') !== false): ?>
                        <p class="text-green-500"><?= $statusData['status'] ?></p>
                        <p class="text-blue-500"><strong>MySQL Version:</strong> <?= $statusData['version'] ?></p>
                        <p class="text-blue-500"><strong>Host:</strong> <?= $statusData['host'] ?></p>
                        <p class="text-blue-500 mb-4"><strong>Database Name:</strong> <?= $statusData['database'] ?></p>
                    <?php else: ?>
                        <p class="error"><?= $statusData['status'] ?></p>
                        <?php if (isset($statusData['errorDetails'])): ?>
                            <p class="text-red-500 mb-4"><strong>Error Details:</strong> <?= $statusData['errorDetails'] ?></p>
                        <?php endif; ?>
                    <?php endif; ?>
                <?php else: ?>
                    <p class="mb-4">Checking connection...</p>
                <?php endif; ?>
                <p class="mb-4">
                    The status above could be either "Connected successfully!" or "Connection failed!." As mentioned
                    earlier, this is not suitable for production use, but it is perfect for testing or demo projects.
                </p>
                <p class="mb-4">
                    If you need storage, you can use the Cloudinary service for free, or simply convert each uploaded
                    file into base64 (not recommended) in your CRUD Controller logic.
                </p>
            </section>

            <section class="shadow-md rounded-lg p-6 bg-[#15181D]">
                <h2 class="text-2xl font-semibold mb-4 text-secondary">HOSTING ON VERCEL</h2>
                <ol class="list-decimal pl-6 text-white mb-4">
                    <li>Create a repo on GitHub and push this code from your repository.</li>
                    <li>Follow these steps before proceeding to Vercel:</li>
                    <ol class="list-disc pl-6 text-white">
                        <li>Open your terminal and navigate to your project folder.</li>
                        <li>Initialize a new Git repository if you haven't already:</li>
                        <code class="bg-[#1C232B] px-1 rounded">git init</code>
                        <li>ignore your <code class="bg-[#1C232B] px-1 rounded">.env</code> in <code class="bg-[#1C232B] px-1 rounded">.gitignore</code></li>
                        <li>Run the following command to add all your changes:</li>
                        <code class="bg-[#1C232B] px-1 rounded">git add .</code>
                        <li>Commit your changes with a message describing the changes:</li>
                        <code class="bg-[#1C232B] px-1 rounded">git commit -m "Your commit message"</code>
                        <li>Create or rename your branch to `main` (if it's not already named `main`):</li>
                        <code class="bg-[#1C232B] px-1 rounded">git branch -M main</code>
                        <li>If you haven't connected your local repository to GitHub, you can do so by running:</li>
                        <code class="bg-[#1C232B] px-1 rounded">git remote add origin https://github.com/your-username/your-repository.git</code>
                        <li>Push your changes to GitHub:</li>
                        <code class="bg-[#1C232B] px-1 rounded">git push -u origin main</code>
                    </ol>
                    <li>In Vercel, click "Import Project" and connect your repository from GitHub.</li>
                    <li>Click "Deploy" to start the process.</li>
                </ol>
            </section>

        </main>
        <footer class="mt-12 text-center text-gray-600">
            <p>ReiiV. All rights reserved.</p>
        </footer>
    </div>
</body>

</html>