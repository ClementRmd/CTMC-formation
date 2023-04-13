<?php get_header(); ?>

<main class="h-screen w-full flex flex-col justify-center items-center bg-blue-medium">
	<div class="text-[200px] font-extrabold text-white tracking-widest">404</div>
	<div class="bg-green px-2 text-[25px] rounded rotate-12 absolute">
		Page introuvable
	</div>
	<button class="mt-5">
      <a
        href=<?= home_url(); ?>
        class="relative inline-block text-sm font-medium text-green group active:text-orange-500 focus:outline-none focus:ring"
      >
        <span
          class="absolute inset-0 transition-transform translate-x-0.5 translate-y-0.5 bg-green group-hover:translate-y-0 group-hover:translate-x-0"
        ></span>

        <span class="relative block px-8 py-3 bg-blue-medium border border-current">
          <span">Retour à la page d'accueil</span>
        </span>
      </a>
    </button>
</main>

<?php get_footer();