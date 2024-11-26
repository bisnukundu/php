<h1> Contacts</h1>
<ul class="border p-5 radius rounded-md bg-gray-200 my-5">
    <?php foreach($contacts as $contact): ?>
    <li class="border p-3 rounded"><?php echo $contact['number'] ?></li>
    <?php endforeach; ?>
</ul>

<form class="border shadow p-5" action="" method="post">
    <div>
        <label for="number" class="block bold">Number:</label>
        <input class="border my-2 w-full block" type="tel" name="number" id="number"></input>
    </div>
    <div>
        <label for="name" class="block bold">Name:</label>
        <input type="text" class="border my-2 w-full block" name="name" id="name"/>
    </div>
    <div>
        <label for="location" class="block bold">Location:</label>
        <input type="text" class="border my-2 w-full" name="location" id="location" />
    </div>
    <input class="border px-5 bg-gray-400 py-1 block" type="submit" value="Create">
</form>

