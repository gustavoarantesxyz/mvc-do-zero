<main class="container text-center p-5">
    <h1> Finded user page</h1>
    <div class="p-3">
        <div class="p-3 border rounded-3 col-6 mx-auto shadow">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Age</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data as $user) { ?>
                    <tr>
                        <td><?= $user->user_id;   ?></td>
                        <td><?= $user->user_name; ?></td>
                        <td><?= $user->user_age;  ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
            <a href="<?= BASE_URL ?>" class="btn btn-primary">Return</a>
        </div>
    </div>
</main>