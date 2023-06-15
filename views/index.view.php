<?php require 'partials/head.view.php' ?>
<?php require 'partials/nav.view.php' ?>
<?php require 'partials/header.view.php' ?>
    
    <main class="-mt-32 pb-2">
        <div class="mx-auto max-w-7xl mb-20 p-4 pb-12 sm:p-6 lg:p-8 bg-white rounded-lg shadow-lg">
            <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                    <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-300">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">Nazwa waluty</th>
                                    <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Kod waluty</th>
                                    <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Wartość waluty</th>
                                </tr>
                            </thead>

                            <tbody class="divide-y divide-gray-200 bg-white">
                                <?php foreach ($currencies as $currency) : ?>
                                    <tr class="hover:bg-gray-100">
                                        <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6 capitalize"><?= $currency['currency'] ?></td>
                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500"><?= $currency['code'] ?></td>
                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500"><?= $currency['mid'] ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>

<?php require 'partials/footer.view.php' ?>