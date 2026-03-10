<!DOCTYPE html>
<html lang="en" class="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tools Index</title>
    
    <script src="assets/js/tailwindcss.js"></script>
    <script src="assets/js/theme-config.js"></script>
    <script defer src="assets/js/alpine.min.js"></script>

    <script>
        // Check for saved theme preference or system preference
        if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark')
        } else {
            document.documentElement.classList.remove('dark')
        }
    </script>
</head>
<body class="bg-gray-100 dark:bg-gray-900 min-h-screen font-sans text-gray-900 dark:text-gray-100 flex justify-center p-4 sm:p-8 transition-colors duration-300">
    
    <div class="w-full max-w-2xl" x-data="{ 
        darkMode: localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches),
        toggleTheme() {
            this.darkMode = !this.darkMode;
            if (this.darkMode) {
                document.documentElement.classList.add('dark');
                localStorage.theme = 'dark';
            } else {
                document.documentElement.classList.remove('dark');
                localStorage.theme = 'light';
            }
        }
    }">
        
        <!-- Header with Title and Theme Toggle -->
        <div class="flex justify-between items-center mb-8">
            <h1 class="text-3xl font-extrabold text-gray-900 dark:text-white tracking-tight">
                Tools Directory
            </h1>
            
            <button @click="toggleTheme()" 
                class="p-2 rounded-lg bg-white dark:bg-gray-800 text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-primary-500 transition-all duration-200 shadow-sm border border-gray-200 dark:border-gray-700"
                aria-label="Toggle Dark Mode">
                
                <!-- Sun Icon -->
                <svg x-show="!darkMode" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path>
                </svg>
                
                <!-- Moon Icon -->
                <svg x-show="darkMode" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" style="display: none;">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 24.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path>
                </svg>
            </button>
        </div>

        <!-- File List Container -->
        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-xl overflow-hidden border border-gray-200 dark:border-gray-700 transition-colors duration-300">
            <ul class="divide-y divide-gray-200 dark:divide-gray-700">
                <?php
                $files = scandir(__DIR__);
                $ignore = ['.', '..', 'index.php', '.git', '.vscode', '.DS_Store', 'assets'];
                $count = 0;

                foreach ($files as $file) {
                    if (in_array($file, $ignore)) continue;
                    
                    // Get filename without extension for display
                    $displayName = pathinfo($file, PATHINFO_FILENAME);
                    
                    // Replace hyphens and underscores with spaces
                    $displayName = str_replace(['-', '_'], ' ', $displayName);
                    
                    // Convert to Title Case
                    $displayName = ucwords($displayName);
                    
                    echo "
                    <li class='group'>
                        <a href=\"$file\" class=\"block p-4 sm:p-5 hover:bg-gray-50 dark:hover:bg-gray-700/50 transition duration-150 ease-in-out flex items-center justify-between\">
                            <div class=\"flex items-center min-w-0\">
                                <div class=\"flex-shrink-0 mr-4\">
                                    <span class=\"inline-flex items-center justify-center h-10 w-10 rounded-lg bg-primary-100 dark:bg-primary-900/30 text-primary-600 dark:text-primary-400 group-hover:bg-primary-200 dark:group-hover:bg-primary-900/50 transition-colors duration-200\">
                                        <svg class=\"h-6 w-6\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z\"></path>
                                        </svg>
                                    </span>
                                </div>
                                <div class=\"min-w-0 truncate\">
                                    <p class=\"text-lg font-semibold text-gray-900 dark:text-gray-100 truncate group-hover:text-primary-600 dark:group-hover:text-primary-400 transition-colors duration-150\">
                                        $displayName
                                    </p>
                                    <p class=\"text-sm text-gray-500 dark:text-gray-400 truncate\">
                                        $file
                                    </p>
                                </div>
                            </div>
                            <div class=\"ml-4 flex-shrink-0\">
                                <svg class=\"h-5 w-5 text-gray-400 group-hover:text-primary-500 transition-colors duration-150\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\" aria-hidden=\"true\">
                                    <path fill-rule=\"evenodd\" d=\"M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z\" clip-rule=\"evenodd\" />
                                </svg>
                            </div>
                        </a>
                    </li>";
                    $count++;
                }

                if ($count === 0) {
                    echo "
                    <li class='p-8 text-center'>
                        <div class='flex flex-col items-center justify-center text-gray-500 dark:text-gray-400'>
                            <svg class='w-12 h-12 mb-3 opacity-50' fill='none' stroke='currentColor' viewBox='0 0 24 24'>
                                <path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z'></path>
                            </svg>
                            <p class='text-lg font-medium'>No files found</p>
                            <p class='text-sm mt-1'>Add some files to this directory to see them listed here.</p>
                        </div>
                    </li>";
                }
                ?>
            </ul>
        </div>
        
        <footer class="mt-8 text-center text-sm text-gray-500 dark:text-gray-400">
            <p>&copy; <?php echo date("Y"); ?> Tools Directory</p>
        </footer>
    </div>
</body>
</html>
