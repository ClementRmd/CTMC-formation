<div class="relative max-w-7xl mx-auto px-0 py-16">
    <div class="lg:pr-8">
        <div class="max-w-md mx-auto sm:max-w-xl lg:mx-0">
            <h2 class="text-3xl font-primary underline sm:text-4xl">Nous contacter</h2>
            <form id="formContact" action="#" method="POST" class="mt-9 grid grid-cols-1 gap-y-6 sm:grid-cols-2 sm:gap-x-8">
                <div class="bloc-firstname">
                    <label for="first-name" class="block font-primary">Prénom</label>
                    <div class="mt-1">
                    <input type="text" name="first-name" id="first-name" autocomplete="given-name" class="block w-full shadow-sm sm:text-sm focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md">
                    </div>
                </div>
                <div class="bloc-lastname">
                    <label for="last-name" class="block font-primary">Nom</label>
                    <div class="mt-1">
                    <input type="text" name="last-name" id="last-name" autocomplete="family-name" class="block w-full shadow-sm sm:text-sm focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md">
                    </div>
                </div>
                <div class="bloc-email sm:col-span-2">
                    <label for="email" class="block font-primary">Email</label>
                    <div class="mt-1">
                    <input id="email" name="email" type="email" autocomplete="email" class="block w-full shadow-sm sm:text-sm focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md">
                    </div>
                </div>
                <div class="bloc-message sm:col-span-2">
                    <div class="flex justify-between">
                    <label for="message" class="block font-primary">Votre message</label>
                    <span id="how-can-we-help-description" class="font-primary">Max. 500 caractères</span>
                    </div>
                    <div class="mt-1">
                    <textarea id="message" name="message" aria-describedby="how-can-we-help-description" rows="4" class="block w-full shadow-sm sm:text-sm focus:ring-indigo-500 focus:border-indigo-500 border border-gray-300 rounded-md"></textarea>
                    </div>
                </div>
                <div class="text-right sm:col-span-2">
                    <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm font-primary rounded-md text-white bg-blue-light hover:bg-blue-medium focus:outline-none">Envoyer</button>
                </div>
            </form>
        </div>
    </div>
</div>
