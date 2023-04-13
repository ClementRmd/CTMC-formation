      </div>
      <?php if (!is_404()) : ?>
        <footer id="footer">
          <?= get_template_part('templates/footer/footer', 'main'); ?>
        </footer>
      <?php endif; ?>
      <!-- Execution de la fonction wp_footer() obligatoire ! -->
      <?php wp_footer();  ?>
      </body>

      </html>