<?php
include "db_connect.php";

$action = "php/ajouter_habitat.php";

$hidden = "hidden";
$nameHab = "";
$descriptionHab = '';
$idHab = 0;
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['idHab'])) {
  $hidden = "block";
  $idHab = (int)$_POST['idHab'];
  $action = "php/modifier_habitat.php?idHab=" . $idHab;

  $sql = " select * from  habitat where idHab= " . $idHab;

  try {
    $resultat = $cennect->query($sql);
    $habitat_modify = $resultat->fetch_assoc();
    $nameHab =   $habitat_modify['NomHab'];
    $descriptionHab =  $habitat_modify['Description_Hab'];
  } catch (Exception $e) {
    print('Erreur de connexion à la base de données.');
  }
}
?>


<!DOCTYPE html>
<html class="light" lang="fr">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <title>Tableau de bord de gestion des habitats</title>
  <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
  <link href="https://fonts.googleapis.com" rel="preconnect" />
  <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
  <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&amp;display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" rel="stylesheet" />
  <style>
    .material-symbols-outlined {
      font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
    }
  </style>
  <script id="tailwind-config">
    tailwind.config = {
      darkMode: "class",
      theme: {
        extend: {
          colors: {
            "primary": "#13ec5b",
            "background-light": "#f6f8f6",
            "background-dark": "#102216",
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>

<body class="font-display bg-background-light dark:bg-background-dark">
  <div class="relative flex h-auto min-h-screen w-full group/design-root ">
    <aside
      class="flex h-screen w-64 flex-col justify-between border-r border-border-light bg-foreground-light p-4 dark:border-border-dark dark:bg-foreground-dark sticky top-0">
      <div class="flex flex-col gap-2">
        <div class="flex items-center gap-3 px-1 py-2">
          <div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10"
            data-alt="Logo du Zoo"
            style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuB0Lg1OEXJcVVLNu-F6WdrhKg3x_oITAykEs4sv1tonbmxNuSYelzNpbTz0uZeDE9pn5C1fVmaHtkBsSZswb9MqE4bPkadWEdAXoShGf6e9VFYxd2HUxueX0eXHhOxmEmwV81zxkOeXGuTh_FHL-eM-5x7tof3w167DposoHSNPe5IY9s-L-g1NpZN-optSF_VH8WfQOdshKb6i8QxLM0StObMwydCAiXrkhFc1W8izSSSn34g7N28pr0md3jJqxSnH434lfcrFMF8");'>
          </div>
          <div class="flex flex-col">
            <h1
              class="text-base font-medium leading-normal text-text-light-primary dark:text-text-dark-primary">
              Zoo Manager</h1>
            <p
              class="text-sm font-normal leading-normal text-text-light-secondary dark:text-text-dark-secondary">
              Application de Gestion</p>
          </div>
        </div>
        <nav class="mt-4 flex flex-col gap-1">
          <a class="flex items-center gap-3 rounded-lg px-3 py-2.5 hover:bg-primary/10 dark:hover:bg-primary/20" href="index.php">
            <span class="material-symbols-outlined text-text-light dark:text-text-dark"
              style="font-variation-settings: 'FILL' 1;">dashboard</span>
            <span class="text-sm font-semibold leading-normal text-text-light dark:text-text-dark">Tableau
              de bord</span>
          </a>
          <a class="flex items-center gap-3 rounded-lg px-3 py-2.5 hover:bg-primary/10 dark:hover:bg-primary/20"
            href="gestion_des_animaux.php">
            <span class="material-symbols-outlined text-text-light dark:text-text-dark">eco</span>
            <span class="text-sm font-medium leading-normal text-text-light dark:text-text-dark">Gestion des
              animaux</span>
          </a>
          <a class="flex items-center gap-3 rounded-lg px-3 py-2.5 bg-primary/20 dark:bg-primary/30"
            href="gestion_des_habitats.php">
            <span class="material-symbols-outlined text-text-light dark:text-text-dark">pets</span>
            <span class="text-sm font-medium leading-normal text-text-light dark:text-text-dark">Gestion des
              habitats</span>
          </a>

          <a class="flex items-center gap-3 rounded-lg px-3 py-2.5 hover:bg-primary/10 dark:hover:bg-primary/20"
            href="Statistiques.php">
            <span class="material-symbols-outlined text-text-light dark:text-text-dark">bar_chart</span>
            <span
              class="text-sm font-medium leading-normal text-text-light dark:text-text-dark">Statistiques</span>
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
        <a class="flex items-center gap-3 rounded-lg px-3 py-2.5 hover:bg-primary/10 dark:hover:bg-primary/20"
          href="#">
          <span class="material-symbols-outlined text-text-light dark:text-text-dark">settings</span>
          <span
            class="text-sm font-medium leading-normal text-text-light dark:text-text-dark">Paramètres</span>
        </a>
      </div>
    </aside>
    <div class="flex-1 flex flex-col">

      <main class="flex-1 p-4 sm:p-6 lg:p-8 position : relative">
        <div class="flex flex-wrap justify-between items-start gap-4 mb-6">
          <div class="flex min-w-72 flex-col gap-2">
            <p class="text-[#0d1b12] dark:text-white text-4xl font-black leading-tight tracking-[-0.033em]">Gestion des Habitats</p>
            <p class="text-[#4c9a66] dark:text-primary/70 text-base font-normal leading-normal">Parcourez, ajoutez, modifiez ou supprimez des habitats.</p>
          </div>
          <button class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-primary text-[#0d1b12] text-sm font-bold leading-normal tracking-[0.015em] hover:bg-opacity-90 transition-colors gap-2" id="ajouter-habitat">
            <span class="material-symbols-outlined text-xl">add</span>
            <span class="truncate">Ajouter un Habitat</span>
          </button>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 xl:grid-cols-3 gap-6">
          <?php foreach ($array_habitat as $habitat) { ?>
            <div class="flex flex-col gap-3 rounded-xl bg-white dark:bg-gray-900/50 border border-primary/20 dark:border-primary/30 shadow-sm transition-shadow hover:shadow-lg overflow-hidden">
              <div class="w-full bg-center bg-no-repeat aspect-video bg-cover" data-alt="Expansive grassy plains of the African Savanna with acacia trees under a blue sky." style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuB7aqywVymekrDt7RadA8NHyvmnxenBp8X92BHLeMcuqnP895vJYxi0x9UXtpVoprScm5Moo5NbeigrBg8HGOo1CagxvrE5EyQAa3p4Fzs2ERFH4OWEDrWzWrDiWeWjic89hCNU6AZA8VZPO30q8MAp1guzNBItnckm_8K_HVshr58yi02unLZifKdYGAhNOlJjAanuKUPuKrLOvE9ZkdSSLjZL0ie45hBM9vlK9m098UtNA4KcZe5pM95GP4dExta_vYejhaneuhU");'></div>
              <div class="p-4 flex flex-col flex-1">
                <p class="text-[#0d1b12] dark:text-white text-lg font-bold leading-normal"> <?= $habitat[1] ?></p>
                <p class="text-[#4c9a66] dark:text-primary/70 text-sm font-normal leading-normal mt-1 flex-1"><?= $habitat[2] ?></p>
                <div class="flex items-center justify-end gap-2 mt-4">
                  <form action="" method="POST">
                    <input type="hidden" name="idHab" value="<?= $habitat[0]; ?>">
                    <button target="edit" data-id="<?= $habitat[0]; ?> class=" flex items-center justify-center size-9
                      rounded-lg hover:bg-primary/20 dark:hover:bg-primary/30 text-[#4c9a66] dark:text-primary/70
                      dark:hover:text-primary transition-colors">
                      <span class="material-symbols-outlined text-xl">edit</span>
                    </button>
                  </form>


                  <button target="delete" data-id="<?= $habitat[0]; ?>" class="flex items-center justify-center size-9 rounded-lg hover:bg-red-500/10 dark:hover:bg-red-500/20 text-red-600 dark:text-red-500 transition-colors">
                    <span class="material-symbols-outlined text-xl">delete</span>
                  </button>
                </div>
              </div>
            </div>
          <?php } ?>
        </div>

      </main>
      <section class="flex-1 p-6 lg:p-10  <?= $hidden ?> position: absolute top: 0 left: 0 right: 0 bottom: 0   bg-background-light" id="formulaire-habitat-container">
        <div class="mx-auto max-w-4xl">
          <div class="mb-8 flex items-start justify-between">
            <div class="flex min-w-72 flex-col gap-2">
              <h1 class="text-text-light dark:text-text-dark text-4xl font-black leading-tight tracking-[-0.033em]">Formulaire Habitat</h1>
              <p class="text-subtle-light dark:text-subtle-dark text-base font-normal leading-normal">Ajoutez ou modifiez les informations d'un habitat.</p>
            </div>
          </div>
          <div class="bg-card-light dark:bg-card-dark rounded-xl border border-border-light dark:border-border-dark">
            <form action="<?= $action ?>" id="formulaire-habitat" method="post" class="flex flex-col">
              <div class="p-6 lg:p-8 space-y-8">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-2 md:gap-6 items-start">
                  <div class="flex flex-col gap-1">
                    <label class="text-text-light dark:text-text-dark text-base font-medium leading-normal" for="habitat-name">Nom</label>
                    <p class="text-subtle-light dark:text-subtle-dark text-sm">Le nom officiel de l'habitat.</p>
                  </div>
                  <div class="md:col-span-2">
                    <input name="name" id="namehabitat" value="<?= $nameHab ?>" class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-text-light dark:text-text-dark focus:outline-0 focus:ring-2 focus:ring-primary/50 border border-border-light dark:border-border-dark bg-background-light dark:bg-background-dark h-14 placeholder:text-subtle-light dark:placeholder:text-subtle-dark p-[15px] text-base font-normal leading-normal" id="habitat-name" placeholder="Ex: Savane Africaine" type="text" value="" />
                  </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-2 md:gap-6 items-start">
                  <div class="flex flex-col gap-1">
                    <label class="text-text-light dark:text-text-dark text-base font-medium leading-normal" for="habitat-description">Description</label>
                    <p class="text-subtle-light dark:text-subtle-dark text-sm">Une description détaillée de l'habitat, sa faune, sa flore, etc.</p>
                  </div>
                  <div class="md:col-span-2">
                    <textarea name="description" id="descriptionhabitat" class="form-textarea flex w-full min-w-0 flex-1 resize-y overflow-hidden rounded-lg text-text-light dark:text-text-dark focus:outline-0 focus:ring-2 focus:ring-primary/50 border border-border-light dark:border-border-dark bg-background-light dark:bg-background-dark min-h-36 placeholder:text-subtle-light dark:placeholder:text-subtle-dark p-[15px] text-base font-normal leading-normal" id="habitat-description" placeholder="Décrivez les caractéristiques de l'habitat...">
<?= $descriptionHab ?>
                    </textarea>
                    <input type="hidden" name="idHab" value="<?= $idHab ?>">
                  </div>
                </div>
              </div>
              <div class="flex flex-col-reverse sm:flex-row flex-1 gap-3 justify-end p-6 bg-background-light dark:bg-background-dark border-t border-border-light dark:border-border-dark rounded-b-xl">
                <button id="annuler-habitat" class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-12 px-5 bg-transparent text-subtle-light dark:text-subtle-dark text-base font-bold leading-normal tracking-[0.015em] hover:bg-primary/10 dark:hover:bg-primary/20" type="button">
                  <span class="truncate">Annuler</span>
                </button>
                <button id="enregistrer-habitat" type="button" class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-12 px-5 bg-primary text-text-light text-base font-bold leading-normal tracking-[0.015em] hover:opacity-90 gap-2" type="submit">
                  <span class="material-symbols-outlined text-xl">save</span>
                  <span class="truncate">Enregistrer les modifications</span>
                </button>
              </div>
            </form>
          </div>
        </div>
      </section>
    </div>
  </div>
  <script src="js/script.js">

  </script>
  <script>
    $(document).ready(function() {
      $("button[target='delete']").on('click', function(e) {
        if (confirm('Voulez-vous vraiment supprimer cet habitat ?')) {
          const habitatId = $(this).data('id');
          $.ajax({
            url: 'php/supprimer_habitat.php',
            type: 'POST',
            data: {
              idHab: habitatId
            },
            success: function(response) {

              location.reload();

            }
          });
        }
      });
    });
  </script>
</body>


</html>