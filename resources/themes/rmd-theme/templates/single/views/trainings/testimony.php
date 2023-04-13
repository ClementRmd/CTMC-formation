<?php
    $listTestimonyExisting = get_field('field_630f60ef852c0', $args);
?>

<div class="flex flex-col mx-auto items-center justify-center max-w-lg">
    <div class="list-testimony w-full">
        <?php if ($listTestimonyExisting): ?>
            <?php foreach ($listTestimonyExisting as $key => $testimony) : ?>
                <?php get_template_part('templates/single/views/trainings/message', '', $testimony); ?>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
    <form id="form_testimony" class="w-full max-w-xl pt-2" data-postid="<?= $args ?>">
        <div class="flex flex-wrap -mx-3 mb-6">
            <h2 class="px-4 pt-3 text-3xl font-primary">Laissez un témoignage</h2>
            <p class="px-4 pt-3 pb-3 text-main font-secondary">Votre adresse e-mail ne sera pas publiée. Les champs obligatoires sont indiqués avec *</p>
            <div class="w-full md:w-full px-3 mb-2 mt-2">
                <textarea
                    class="flex w-full h-20 pb-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white"
                    name="message"
                    placeholder="Commentaire *"
                    required
                ></textarea>
            </div>
            <div class="w-full md:w-full px-3 mb-2 mt-2">
                <input
                    type="text"
                    class=" w-full pb-2 px-3 font-medium focus:outline-none focus:bg-white"
                    name="name"
                    placeholder="Nom *"
                    required
                ></input>
            </div>
            <div class="w-full md:w-full px-3 mb-2 mt-2">
                <input
                    type="email"
                    class=" w-full pb-2 px-3 font-medium focus:outline-none focus:bg-white"
                    name="email"
                    placeholder="Email"
                    required
                ></input>
            </div>
            <div class="w-full md:w-full flex items-start md:w-full px-3 mt-6">
                <input type='submit' class="bg-blue-medium text-white font-medium py-2 px-4 rounded-lg tracking-wide mr-1 hover:bg-blue-light" value='Soumettre un témoignage'>
            </div>
        </form>
    </div>
</div>