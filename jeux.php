<!DOCTYPE html>
<html class="light" lang="fr">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <title>Formulaire Habitat (Ajout/Modification)</title>
  <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
  <link href="https://fonts.googleapis.com" rel="preconnect" />
  <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
  <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&amp;display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" rel="stylesheet" />
  <style>
    .material-symbols-outlined {
      font-variation-settings:
        'FILL' 0,
        'wght' 400,
        'GRAD' 0,
        'opsz' 24
    }
  </style>
  <script>
    tailwind.config = {
      darkMode: "class",
      theme: {
        extend: {
          colors: {
            "primary": "#13ec5b",
            "background-light": "#f6f8f6",
            "background-dark": "#102216",
            "text-light": "#0d1b12",
            "text-dark": "#e8f3ec",
            "subtle-light": "#4c9a66",
            "subtle-dark": "#a8c7b3",
            "border-light": "#cfe7d7",
            "border-dark": "#345941",
            "card-light": "#ffffff",
            "card-dark": "#1a3824"
          },
          fontFamily: {
            "display": ["Lexend", "sans-serif"]
          },
          borderRadius: {
            "DEFAULT": "0.25rem",
            "lg": "0.5rem",
            "xl": "0.75rem",
            "full": "9999px"
          },
        },
      },
    }
  </script>
</head>

<body class="bg-background-light dark:bg-background-dark font-display">
  <div class="relative flex h-auto min-h-screen w-full flex-col">
    <div class="flex h-full min-h-screen">
      <aside
        class="flex h-screen w-64 flex-col justify-between border-r border-border-light bg-foreground-light p-4 dark:border-border-dark dark:bg-foreground-dark sticky top-0">
        <div class="flex flex-col gap-2">
          <div class="flex items-center gap-3 px-1 py-2">
            <div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10" data-alt="Logo du Zoo"
              style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuB0Lg1OEXJcVVLNu-F6WdrhKg3x_oITAykEs4sv1tonbmxNuSYelzNpbTz0uZeDE9pn5C1fVmaHtkBsSZswb9MqE4bPkadWEdAXoShGf6e9VFYxd2HUxueX0eXHhOxmEmwV81zxkOeXGuTh_FHL-eM-5x7tof3w167DposoHSNPe5IY9s-L-g1NpZN-optSF_VH8WfQOdshKb6i8QxLM0StObMwydCAiXrkhFc1W8izSSSn34g7N28pr0md3jJqxSnH434lfcrFMF8");'>
            </div>
            <div class="flex flex-col">
              <h1 class="text-base font-medium leading-normal text-text-light-primary dark:text-text-dark-primary">
                Zoo Manager</h1>
              <p class="text-sm font-normal leading-normal text-text-light-secondary dark:text-text-dark-secondary">
                Application de Gestion</p>
            </div>
          </div>
          <nav class="mt-4 flex flex-col gap-1">
            <a class="flex items-center gap-3 rounded-lg px-3 py-2.5 hover:bg-primary/10 dark:hover:bg-primary/20"
              href="index.php">
              <span class="material-symbols-outlined text-text-light dark:text-text-dark"
                style="font-variation-settings: 'FILL' 1;">dashboard</span>
              <span class="text-sm font-semibold leading-normal text-text-light dark:text-text-dark">Tableau
                de bord</span>
            </a>
            <a class="flex items-center gap-3 rounded-lg px-3 py-2.5 bg-primary/20 dark:bg-primary/30" href="gestion_des_animaux.php">
              <span class="material-symbols-outlined text-text-light dark:text-text-dark">pets</span>
              <span class="text-sm font-medium leading-normal text-text-light dark:text-text-dark">Gestion des
                animaux</span>
            </a>
            <a class="flex items-center gap-3 rounded-lg px-3 py-2.5 hover:bg-primary/10 dark:hover:bg-primary/20"
              href="gestion_des_habitats.php">
              <span class="material-symbols-outlined text-text-light dark:text-text-dark">eco</span>
              <span class="text-sm font-medium leading-normal text-text-light dark:text-text-dark">Gestion des
                habitats</span>
            </a>
            <a class="flex items-center gap-3 rounded-lg px-3 py-2.5 hover:bg-primary/10 dark:hover:bg-primary/20"
              href="Statistiques.php">
              <span class="material-symbols-outlined text-text-light dark:text-text-dark">bar_chart</span>
              <span class="text-sm font-medium leading-normal text-text-light dark:text-text-dark">Statistiques</span>
            </a>
            <a class="flex items-center gap-3 rounded-lg px-3 py-2.5 hover:bg-primary/10 dark:hover:bg-primary/20"
              href="jeux.php">
              <span class="material-symbols-outlined text-text-light dark:text-text-dark">joystick</span>
              <span class="text-sm font-medium leading-normal text-text-light dark:text-text-dark">Jeu
                animalier</span>
            </a>
          </nav>
        </div>
        <div class="flex flex-col gap-2">
          <a class="flex items-center gap-3 rounded-lg px-3 py-2.5 hover:bg-primary/10 dark:hover:bg-primary/20" href="#">
            <span class="material-symbols-outlined text-text-light dark:text-text-dark">settings</span>
            <span class="text-sm font-medium leading-normal text-text-light dark:text-text-dark">Paramètres</span>
          </a>
        </div>
      </aside>
      <main>
        <h1 class="tracking-light text-[32px] font-bold leading-tight px-4 text-center pb-3 pt-6 text-text-light dark:text-text-dark">Écoute le son et trouve l'animal</h1>
        <div class="flex px-4 py-3 justify-center">
          <button class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-full h-12 px-5 bg-primary text-text-light gap-2 text-base font-bold leading-normal tracking-[0.015em] hover:opacity-90 transition-opacity">

            <span class="truncate">lion</span>
          </button>
        </div>
        <div class="grid grid-cols-[repeat(auto-fit,minmax(158px,1fr))] gap-4 p-4">
          <div class="flex flex-col gap-3 group">
            <div class="w-full bg-center bg-no-repeat aspect-square bg-cover rounded-lg cursor-pointer transition-all duration-300 group-hover:scale-105 group-hover:shadow-xl shadow-primary/30" data-alt="A lion roaring in the savanna" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDVaknIq5Jw9BaIqEVIxQd-E5kgbJa-TEDXSIaHpnlfB4nDkQiRxvnOi3H8VpHb39fSBn7x8RFcEWRvuEmiPX33LEn2XNh1oAbpSFB1aVPdFSIkR7mKzlsZ24MiSAJW-FyeqioIkCgWNU33EC69KaJw3rw1WoUKGU15LBNtta0AswIpFP0uR0P2ef4BHusRHOXN9ZYeWX-Z-uBu3Y9EPhiHLUdfbz_7-anKAcHyYce3TBsoZfZ7RjDKJrffBJtoKcsrt5NI7PpaAUY");'></div>
          </div>
          <div class="flex flex-col gap-3 group">
            <div class="w-full bg-center bg-no-repeat aspect-square bg-cover rounded-lg cursor-pointer transition-all duration-300 group-hover:scale-105 group-hover:shadow-xl shadow-primary/30" data-alt="A colorful parrot perched on a branch" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBAoHEfWHJZodgivvVMcbxhTo4q4iSdcbkk20hgSXSwWhdDMtmBCyvhicYm6wH_ZGE8_nmos-sMateiCGDetma3GV59LefpMVHSZrRhYpSKCtUmHCNZhRxa0F0OQwKTCZ89KznlPFVEPnkZ5eeXBa8tYk9E1Z9Jh56bCrXyq1oooZAmQ9pM7LMdITHy5LMgMsj_LUqgvYsDDksEP6CXkDG8jqWb2eSSKRT3_2U8V7lbS9dDenOv4m2r-P9VAwsf8FWEIBAPRZIxclc");'></div>
          </div>
          <div class="flex flex-col gap-3 group">
            <div class="w-full bg-center bg-no-repeat aspect-square bg-cover rounded-lg cursor-pointer transition-all duration-300 group-hover:scale-105 group-hover:shadow-xl shadow-primary/30" data-alt="A monkey swinging from a tree" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuC-pwEBu0jSbFfNZu3xe_leQIigD4TUfYfWZdE1wJ2_A-i0IUQJpP_IBdNQUxWXgJlq42yPVYY_EMUrbVArQTPFVoxSAO4FI43GBxihXN7rXcmj2UTPnA4JbblcrKlKQWZsV_cTAZ7PFExMEiBs9pYwhR5BiYpOvZ8QvAYH5ggem2u4WVoqk0F2Bw3qaJX1J7NMHZMGU3NrzEz7-xBzfY49K--RjhsUk3yWbd1kczFn3VOtUTfDhd4t3EF-UhB0aTXj73yQr2_M0GY");'></div>
          </div>
          <div class="flex flex-col gap-3 group">
            <div class="w-full bg-center bg-no-repeat aspect-square bg-cover rounded-lg cursor-pointer transition-all duration-300 group-hover:scale-105 group-hover:shadow-xl shadow-primary/30" data-alt="An elephant drinking water from a lake" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAopveXJRemPA1K_kUgqKUWkikidFirvdLsi3f9aKDXADSEPzZ6MA5WfoxQuZAeCMVgu8TcUi_adpj28A7UsL275KkLjZ_TbOMv8Z5I3uP9-9z6fE9DkKLwugf3XtTFaJO0YPwzHayxIQirvOhND3nT8QQLOYC-Zl1SQ_FBtNav_5v4wxgH6lWu_IbIESppQEdYGtV2tCiIy9PA49nPXpEiAKIPTSBmQEWMyFhwtvI-apw_tpgLrruIUtnsSBsa-9VmY-CD8lYBS-Q");'></div>
          </div>
          <div class="flex flex-col gap-3 group">
            <div class="w-full bg-center bg-no-repeat aspect-square bg-cover rounded-lg cursor-pointer transition-all duration-300 group-hover:scale-105 group-hover:shadow-xl shadow-primary/30" data-alt="A sleepy panda chewing on bamboo" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDg-v8Gjae2eVYrysBvgx3E-1i2o4fK5OyE6H7wGy4YG6RNU3en1CPdS9aXyUzvRHjs3G0GsJ_42BjeC0TkTfLocEo_JRXAflz9UY1N9sfmwKZgi0VyhCg8aWrebUrzm6HGP3WTWk2Hk9DMSNIyNerm8TTAkChnQQofDxQ1sTUe3vRxuRPDAtn3LED_oUzhbjyvMWy8tdc6TscOGbKxJm4VtDEKshcfMwYY-s0AuvtOovUvoslmkRijciTTb6m9P6zx-R-GrKFSdWM");'></div>
          </div>
          <div class="flex flex-col gap-3 group">
            <div class="w-full bg-center bg-no-repeat aspect-square bg-cover rounded-lg cursor-pointer transition-all duration-300 group-hover:scale-105 group-hover:shadow-xl shadow-primary/30" data-alt="A majestic wolf howling at the moon" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAIKhfJeuM4qTol-jlbAVk3nwzeUv1OLTI5z67W8g4NxPWNnD4oOyzNy3HstfGfSRPslSSvx_ayiVaVBuA-zhFMnf25nI6KnQbq1HxNpNlmTHZUrTOdGCCXkKzpENP9HY6pg6L_hX_BZZfeT3oxDnanSHVheWesXI52d8RUpR_Mq6kAAe8lCqIWboH8oGq2q4VGjaWXRZ_W_anrbuOo0bnJtlj9znsKYDVkRS3HaH_GFLVWvRmTfAHu6KExrjzePubNEaFdxciw3wI");'></div>
          </div>
        </div>
        <div class="flex flex-col gap-3 p-4">
          <div class="flex gap-6 justify-between">
            <p class="text-base font-medium leading-normal text-text-light dark:text-text-dark">Progression</p>
          </div>
          <div class="rounded-full bg-muted-light dark:bg-muted-dark">
            <div class="h-2 rounded-full bg-primary" style="width: 33%;"></div>
          </div>
        </div>
      </main>
    </div>
  </div>

</body>

</html>