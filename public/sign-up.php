<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/styles.css?v=<?php echo time(); ?>">
    <title>Sign Up | HRMS</title>
</head>

<body>

    <div class=" w-screen h-screen p-4 flex items-center justify-center gap-4">
        <div class=" hidden md:flex h-full items-center justify-center">
            <img src="./assets/sign-up.webp" alt="">
        </div>
        <div class=" w-full md:w-[500px] p-4 bg-white rounded-lg shadow-md flex-none">
            <div class=" w-[120px] m-auto">
                <img src="./assets/logo.png" class=" w-full" alt="">
            </div>
            <div class=" text-center text-2xl">Create an Account</div>
            <!-- form -->
            <form action="" method="post">
                <div class=" flex flex-col items-start gap-1 my-2">
                    <label for="username" class=" text-sm font-semibold text-gray-600">Username</label>
                    <input type="text" name="username" id="username" class=" w-full rounded-md py-2 px-4 border-2 border-gray-400 outline-none focus:border-app-primary">
                </div>
                <!--  -->
                <div class=" flex flex-col items-start gap-1 my-2">
                    <label for="email" class=" text-sm font-semibold text-gray-600">Email</label>
                    <input type="text" name="email" id="email" class=" w-full rounded-md py-2 px-4 border-2 border-gray-400 outline-none focus:border-app-primary">
                </div>
                <!--  -->
                <div class=" flex flex-col items-start gap-1 my-2">
                    <label for="password" class=" text-sm font-semibold text-gray-600">Password</label>
                    <input type="text" name="password" id="password" class=" w-full rounded-md py-2 px-4 border-2 border-gray-400 outline-none focus:border-app-primary">
                </div>
                <!--  -->
                <div class=" flex flex-col items-start gap-1 my-2">
                    <label for="confirm_password" class=" text-sm font-semibold text-gray-600">Confirm Password</label>
                    <input type="text" name="confirm_password" id="confirm_password" class=" w-full rounded-md py-2 px-4 border-2 border-gray-400 outline-none focus:border-app-primary">
                </div>
                <!--  -->
                <button type="submit" class=" mt-8 w-full py-2 font-semibold rounded-md text-white bg-app-primary hover:bg-app-secondary active:scale-95">Sign Up</button>
                <div class=" mt-2 text-center text-sm font-semibold text-gray-500">Already have an account? <a href="./login.php" class=" text-app-primary hover:underline">Login</a></div>
            </form>
            <!-- end form -->
        </div>
    </div>

</body>

</html>