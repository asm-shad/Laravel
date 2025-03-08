<x-layout>
    <x-slot:heading>Jobs Page</x-slot:heading>
</x-layout>

<ul>
    @foreach ($jobs as $job)
        <a href="/jobs/{{$job['id']}}"><strong>{{$job['title']}}:</strong> Pays Salary {{$job['salary']}} per year.</a>
    <br>
        @endforeach
</ul>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jobs Listening</title>
    <script src="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.0/dist/tailwind.min.js"></script>
</head>
<body class="font-sans bg-gray-100">

    <div class="max-w-3xl mx-auto p-6 bg-white rounded-lg shadow-lg mt-10 text-center">
        <h1 class="text-4xl font-extrabold text-blue-600 mb-6">About Us</h1>
        <p class="text-lg text-gray-700 mb-4">Welcome to Our Website! We are passionate about delivering high-quality services and products that make a difference. Our team is dedicated to innovation, excellence, and customer satisfaction.</p>
        
        <p class="text-lg text-gray-700 mb-4">With years of experience in the industry, we strive to provide top-notch solutions tailored to your needs. Our mission is to build long-term relationships with our clients by delivering exceptional value and support.</p>

        <p class="text-lg text-gray-700">Thank you for choosing us. We look forward to serving you!</p>
    </div>

</body>
</html>
