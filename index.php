<?php
session_start();

if (isset($_SESSION['success_message'])) {
    echo $_SESSION['success_message'];
    unset($_SESSION['success_message']);
}
?>
<!DOCTYPE html>
<html lang="en" class="bg-blue-300">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./public/style.css" rel="stylesheet">
    <title>Login form</title>
</head>

<body>
    <header>
        <nav class="flex justify-center space-x-4">
            <a href="/dashboard" class="font-medium px-3 py-2 text-slate-700 rounded-lg hover:bg-slate-100 hover:text-slate-900">Home</a>
            <a href="/team" class="font-medium px-3 py-2 text-slate-700 rounded-lg hover:bg-slate-100 hover:text-slate-900">Team</a>
            <a href="/projects" class="font-medium px-3 py-2 text-slate-700 rounded-lg hover:bg-slate-100 hover:text-slate-900">Projects</a>
            <a href="/reports" class="font-medium px-3 py-2 text-slate-700 rounded-lg hover:bg-slate-100 hover:text-slate-900">Reports</a>
            <a href="#" class="font-medium px-3 py-2 text-red-700 rounded-lg hover:bg-orange-300 hover:text-indigo-900">SIGN UP</a>
            <a href="#" class="font-medium px-3 py-2 text-red-700 rounded-lg hover:bg-orange-300 hover:text-indigo-900">LOGIN</a>
        </nav>
    </header>

    <section>
        <div name="index-intro-bg" class="mt-5">
            <div name="wrapper">
                <div name="intro-1">
                    <div class="container mx-auto px-4 my-5">
                        <p class="italic hover:not-italic">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nulla dolore voluptatum molestias consectetur obcaecati voluptas voluptate quidem, officiis sit ratione velit, quis repellat fugit! Aliquid minima, obcaecati accusamus illum non officiis soluta a exercitationem blanditiis, tempore impedit earum odio expedita. Praesentium modi voluptatibus obcaecati quis maiores sequi distinctio deleniti repellat!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section>
        <div name="wrapper">
            <div name="login-signup">
                <h4 class="text-center text-red-700 font-bold">SIGN UP FORM</h4>
                <p class="text-center hover:uppercase">Don't have an account? Register here.</p>
                <form action=" includes/signup.inc.php" method="post" class="mt-4">
                    <div class="flex flex-col items-center w-full max-w-md mx-auto space-y-4">
                        <div>
                            <label for=" name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                            <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-xs p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 max-w-xs" name="name" id="name" placeholder="name">
                        </div>

                        <div>
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Username</label>
                            <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-xs p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="username" id="username" placeholder="username">
                        </div>

                        <div>
                            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                            <input type="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-xs p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="password" id="password" placeholder="password">
                        </div>

                        <div>
                            <label for="password_confirmation" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Confirm Password</label>
                            <input type="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-xs p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="password_confirmation" id="password_confirmation" placeholder="confirm password">
                        </div>

                        <div>
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">E-mail</label>
                            <input type="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-xs p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="email" id="email" placeholder="email">
                        </div>

                        <button class="mt-4 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-xs px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="submit" name="submit">Register</button>
                    </div>
                </form>

            </div>
        </div>

        <div class="mt-4">
            <h4 class="text-center text-red-700 font-bold">Login Form</h4>
            <p class="text-center italic hover:not-italic">You do have an account? Then Login here</p>
            <div class="flex flex-col items-center w-full max-w-md mx-auto space-y-4">
                <form action="includes/login.inc.php" method="post">
                    <div>
                        <input type="text" name="username" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-xs p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder=" username">
                        <input type="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-xs p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="password" placeholder="password">

                        <button type="submit" name="submit" class="mt-4 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-xs px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Login</button>
                    </div>
                </form>
            </div>
    </section>

</body>

</html>