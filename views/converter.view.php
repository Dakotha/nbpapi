<?php require 'partials/head.view.php' ?>
<?php require 'partials/nav.view.php' ?>
<?php require 'partials/header.view.php' ?>
    
    <main class="-mt-32 pb-2">
        <div class="mx-auto max-w-7xl mb-10 p-4 pb-12 sm:p-6 lg:p-8 bg-white rounded-lg shadow-lg">
            <form method="post">
                <div class="w-full sm: w-8/12 md:w-6/12 lg:w-4/12 mx-auto">
            
                    <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:py-2">
                        <label for="amount" class="block text-sm font-medium leading-6 text-gray-900 sm:pt-1.5">Kwota:</label>
                        <div class="mt-2 sm:col-span-2 sm:mt-0">
                            <input
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-gray-600 sm:max-w-xs sm:text-sm sm:leading-6"
                                type="number"
                                name="amount"
                                id="amount"
                                value="<?= $_POST['amount'] ?>"
                            >
                            <?php if ($errors['amount']) : ?>
                                <small class="text-sm text-red-400"><?= $errors['amount'] ?></small>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:py-2">
                        <label for="from" class="block text-sm font-medium leading-6 text-gray-900 sm:pt-1.5">Z:</label>
                        <div class="mt-2 sm:col-span-2 sm:mt-0">
                            <select id="from" name="from" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-gray-600 sm:max-w-xs sm:text-sm sm:leading-6 capitalize">
                                <option value="" selected>Wybierz walutę</option>
                                <?php foreach ($currencies as $currency) : ?>
                                    <option <?= $_POST['from'] === $currency['code'] ? 'selected' : '' ?> value="<?= $currency['code'] ?>"><?= $currency['currency'] ?></option>
                                <?php endforeach; ?>
                            </select>
                            <?php if ($errors['from']) : ?>
                                <small class="text-sm text-red-400"><?= $errors['from'] ?></small>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:py-2">
                        <label for="to" class="block text-sm font-medium leading-6 text-gray-900 sm:pt-1.5">Na:</label>
                        <div class="mt-2 sm:col-span-2 sm:mt-0">
                            <select id="to" name="to" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-gray-600 sm:max-w-xs sm:text-sm sm:leading-6 capitalize">
                                <option value="" selected>Wybierz walutę</option>
                                <?php foreach ($currencies as $currency) : ?>
                                    <option <?= $_POST['to'] === $currency['code'] ? 'selected' : '' ?> value="<?= $currency['code'] ?>"><?= $currency['currency'] ?></option>
                                <?php endforeach; ?>
                            </select>
                            <?php if ($errors['to']) : ?>
                                <small class="text-sm text-red-400"><?= $errors['to'] ?></small>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="mt-6 flex items-center justify-start gap-x-6">
                        <button type="submit" class="inline-flex justify-center rounded-md bg-gray-800 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-gray-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Konwertuj</button>
                    </div>
                </div>
            </form>

            <?php if ($convert) : ?>
                <div class="flex justify-center items-center mt-10 p-4 w-full sm: w-8/12 md:w-6/12 lg:w-4/12 mx-auto bg-gray-100">
                    <div><?= $_POST['amount'] . ' ' . $_POST['from'] . ' = ' . $convert . ' ' . $_POST['to'] ?></div>
                </div>
            <?php endif; ?>
        </div>


        <div class="mx-auto max-w-7xl mb-20 p-4 pb-12 sm:p-6 lg:p-8 bg-white rounded-lg shadow-lg">
            <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                    <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-300">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">Data</th>
                                    <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Kwota</th>
                                    <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Z:</th>
                                    <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Na:</th>
                                    <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Wartość</th>
                                </tr>
                            </thead>

                            <tbody class="divide-y divide-gray-200 bg-white">
                                <?php foreach ($converts as $convert) : ?>
                                    <tr class="hover:bg-gray-100">
                                        <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6 capitalize"><?= date('d-m-Y', strtotime($convert['date'])) ?></td>
                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500"><?= $convert['amount'] ?></td>
                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500"><?= $convert['from'] ?></td>
                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500"><?= $convert['to'] ?></td>
                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500"><?= $convert['convert'] ?></td>
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