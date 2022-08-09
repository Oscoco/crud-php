<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD | Roles de usuarios</title>
</head>

<body>
    <div class="text-center my-4">
        <p class="title_pages text-3xl sm:text-4xl">Administración de Roles</p>
        <p class="secondary_pages">Administración de Roles</p>
    </div>

    <div class="rounded-md mx-8 flex justify-center sm:justify-start">
        <a href="#" class="btn_primary shadow"><i class='bx bx-link mx-1'></i> Nuevo Rol </a>
    </div>

    <div class="overflow-x-auto relative shadow-md sm:rounded-lg sm:mx-16 mx-5 mt-8">
        <table class="w-full text-sm text-left text-gray-700">
            <thead class="text-base dark:text-gray-600 font-bold">
                <tr>
                    <th scope="col" class="w-auto text-center mx-5  border_forms">
                        #
                    </th>
                    <th scope="col" class="px-5 py-3  border_forms">
                        Nombre del Rol
                    </th>
                    <th scope="col" class="py-3 px-5  border_forms">
                        Acciones
                </tr>
            </thead>
            <tbody>
                <tr class="text-base dark:text-gray-600 font-bold">
                    <th scope="row" class="w-auto py-4 text-center border-r border-gray-200 text-gray-900">
                        1
                    </th>
                    <td class="py-4 px-4 bg-gray-50 border-r border-gray-200">
                        Admin
                    </td>
                    <td class="py-4 bg-gray-50">
                        <div class='flex items-center justify-center'>
                            <button class="btn_update ">
                            <i class='bx bx-edit'></i>
                            </button>
                            <button class="mx-2 btn_trash">
                            <i class='bx bxs-trash' ></i>
                            </button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

</body>

</html>