<main class="container text-center p-5">
    <h1>Home page</h1>
    <div class="p-3">
        <div class="border rounded-3 col-6 mx-auto shadow">
            <form action="<?= BASE_URL ?>/user" method="get">
                <div class="p-3">
                    <input type="text" name="id" class="form-control my-3" placeholder="Find by id">
                    <button type="submit" class="btn btn-primary">Find</button>
                    <a href="<?= BASE_URL ?>/users" class="btn btn-success mx-3">List all users</a>
                </input>
            </form>
        </div>
    </div>
</main>