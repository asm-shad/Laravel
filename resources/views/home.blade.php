<x-layout>
    <x-slot:heading>Home Page</x-slot:heading>
    {{-- <h1>{{$greeting}}</h1> --}}

</x-layout>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Welcome</title>
    <script src="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.0/dist/tailwind.min.js"></script>
</head>
<body class="font-sans bg-gray-100">

    <div class="bg-gray-200 text-center py-20">
        <h1 class="text-4xl font-extrabold text-blue-600">Welcome to Our Website</h1>
    </div>

    <div class="max-w-3xl mx-auto p-6 bg-white rounded-lg shadow-lg mt-10 text-center">
        <h2 class="text-3xl font-semibold text-gray-800 mb-4">Your Trusted Source for Quality Services</h2>
        <p class="text-lg text-gray-600 mb-6">We provide the best solutions tailored to your needs. Explore our services and get in touch with us.</p>
        <a href="about.html" class="inline-block py-3 px-6 bg-blue-600 text-white font-bold rounded-lg hover:bg-blue-700 transition duration-200">Learn More</a>
    </div>

</body>
</html>
