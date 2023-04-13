<div class="bloc-list-trainings">
    <?php if ( isset($args['query']) && $args['query']->have_posts() ) : ?>
        <div class="mt-6 max-w-lg mx-auto grid gap-5 lg:grid-cols-3 lg:max-w-none">
            <?= getTrainingsPost($args['query']); ?>
        </div>
    <?php else: ?>
        <div class="flex items-center bg-red-light rounded-lg p-4 mb-4 text-sm text-red-medium" role="alert">
            <svg class="w-5 h-5 inline mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
            <div class="font-primary">
                <span class="font-medium">Erreur: </span> Aucune formations de trouver ! si le problème persiste contacter un administrateur 
            </div>
        </div>
    <?php endif; ?>
</div>