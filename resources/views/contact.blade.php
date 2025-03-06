<x-layout>
    <x-slot:heading>Contact Page</x-slot:heading>
</x-layout>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <script src="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.0/dist/tailwind.min.js"></script>
</head>
<body class="font-sans bg-gray-100">

    <div class="max-w-lg mx-auto p-6 bg-white rounded-lg shadow-lg mt-10">
        <h2 class="text-3xl font-bold text-center text-blue-600 mb-6">Contact Us</h2>
        <form action="submit.php" method="POST">
            <div class="mb-4">
                <label for="name" class="block text-lg font-medium text-gray-700">Name:</label>
                <input type="text" id="name" name="name" class="w-full p-3 border border-gray-300 rounded-lg mt-2" required>
            </div>

            <div class="mb-4">
                <label for="email" class="block text-lg font-medium text-gray-700">Email:</label>
                <input type="email" id="email" name="email" class="w-full p-3 border border-gray-300 rounded-lg mt-2" required>
            </div>

            <div class="mb-4">
                <label for="message" class="block text-lg font-medium text-gray-700">Message:</label>
                <textarea id="message" name="message" rows="5" class="w-full p-3 border border-gray-300 rounded-lg mt-2" required></textarea>
            </div>

            <button type="submit" class="w-full py-3 bg-blue-600 text-white font-bold rounded-lg hover:bg-blue-700 transition duration-200">Send Message</button>
        </form>
    </div>

</body>
</html>
