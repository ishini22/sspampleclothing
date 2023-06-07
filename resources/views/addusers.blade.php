<x-app-layout>
<section class="max-w-4xl p-6 mx-auto bg-grey-300 rounded-md shadow-md dark:bg-gray-800 mt-20">
    <h1 class="text-xl font-bold text-black capitalize dark:text-white ">Add Users</h1><br>
<form method='post' action="{{url('saveuser')}}">
@csrf
<div class="mb-6" >
<label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name of the User</label>
<input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name" required>
</div>

<div class="mb-6">
<label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
<input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@flowbite.com" required>
</div>

<div class="mb-6">
<label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
<input type="password" name="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
</div>


<button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
<a href="{{url('/redirect')}}"><button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Back</button></a>
</form>
<div>
</div>
</section>
</x-app-layout>