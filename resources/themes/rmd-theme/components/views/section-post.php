<div class="flex flex-col rounded-lg shadow-lg overflow-hidden cursor-pointer hover:scale-105">
    <div style="height: 190px; background: center / cover no-repeat url('<?= $args['image']; ?>');"></div>
    <div class="flex-1 bg-white p-6 flex flex-col justify-between">
        <div class="flex-1">
            <p class="text-sm font-medium">
                <a href="#" class="hover:underline text-gray-dark font-primary"><?= $args['type']; ?></a>
            </p>
            <div class="block mt-2">
                <p class="text-4xl font-semibold text-gray-dark font-primary"><?= ucfirst(strtolower($args['title'])); ?></p>
                <p class="mt-3 text-base"><?= $args['content']; ?></p>
            </div>
        </div>
    </div>
    <div class="flex items-center h-[50px] bg-white pb-6 pl-6">
        <a href="<?= $args['link']; ?>" class="block">
            <span class="bg-blue-light hover:bg-green text-white font-bold py-2 px-4 rounded font-primary">Lire la suite</span>
        </a>
    </div>
</div>