<?php
session_start();

// --- Inclusion du fichier de connexion à la base de données (à décommenter)
// include "../db_connect.php"; 

// 1. Vérification stricte des variables de session pour l'accès guide
if (
    isset($_SESSION['user_role'], $_SESSION['logged_in'], $_SESSION['user_id'], $_SESSION['user_name']) &&
    $_SESSION['user_role'] === "guide" &&
    $_SESSION['logged_in'] === TRUE
) {
    // Extraction des données de session
    $id_utilisateur = htmlspecialchars($_SESSION['user_id']);
    $nom_utilisateur = htmlspecialchars($_SESSION['user_name']);
    $role_utilisateur = htmlspecialchars($_SESSION['user_role']);
    
    // 2. SIMULATION DES DONNÉES DU PROFIL DU GUIDE (Remplacer par l'appel à la base de données)
    $profile_data = [
        'first_name' => 'Youssef',
        'last_name' => 'El Fassi',
        'email' => 'youssef.elfassi@zoo-assad.ma',
        'phone' => '+212 6 XX XX XX XX',
        'bio' => 'Guide spécialisé en faune africaine, avec 5 ans d\'expérience dans les visites virtuelles éducatives.',
        'profile_picture_url' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuB6SweDCChTHrnzUi3ijD-HqKt7FximPeaVPRuHptoZB3gCiNIREev191XH6lCU2g9dWO-0nb19loXauXqO29KxIYeVB8L_qXV7j_z9ew9PCkxmtTGzyhArcCoyjioHHD9oWPKFoA4SKfrqRSRlWptyCfastPtNkgSlFizXCwA60Izfk-CrC13bruBTAOjH610XOUvFB1RnfkoM-IeFW7fkvzAujenUwRWp02gjgWiOhb4zpbuGErPegntLM0188b1Dkbt6DnzndgR5', // URL d'exemple
    ];

    // 3. Gestion de la soumission du formulaire (simple simulation)
    $success_message = '';
    $error_message = '';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['update_profile'])) {
            // Ici, vous ajouteriez la logique de validation et de mise à jour dans la base de données
            // Par exemple : update_user_profile($id_utilisateur, $_POST);
            
            $success_message = "Votre profil a été mis à jour avec succès !";
            // Recharger les données pour refléter le changement (non implémenté ici pour la simulation)
        } elseif (isset($_POST['change_password'])) {
            // Ici, vous ajouteriez la logique de vérification de l'ancien mot de passe et de mise à jour
            
            if ($_POST['new_password'] !== $_POST['confirm_password']) {
                $error_message = "Le nouveau mot de passe et la confirmation ne correspondent pas.";
            } else {
                 // update_user_password($id_utilisateur, $_POST['new_password']);
                 $success_message = "Votre mot de passe a été changé avec succès.";
            }
        }
    }

} else {
    // Redirection de sécurité
    header("Location: connexion.php?error=access_denied");
    exit(); 
}
?>

<!DOCTYPE html>

<html class="light" lang="fr">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Paramètres - ASSAD</title>
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;700;800&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#ec7f13",
                        "background-light": "#fcfaf8",
                        "background-dark": "#221910",
                        "surface-light": "#ffffff",
                        "surface-dark": "#2d241b",
                        "text-main-light": "#1b140d",
                        "text-main-dark": "#fcfaf8",
                        "text-sec-light": "#9a734c",
                        "text-sec-dark": "#d0bba6",
                        "border-light": "#e7dbcf",
                        "border-dark": "#4a3b2f",
                    },
                    fontFamily: {
                        "display": ["Plus Jakarta Sans", "sans-serif"]
                    },
                    borderRadius: {
                        "DEFAULT": "0.5rem",
                        "lg": "1rem",
                        "xl": "1.5rem",
                        "full": "9999px"
                    },
                },
            },
        }
    </script>
    <style>
        .material-symbols-outlined {
            font-variation-settings:
                'FILL' 1,
                'wght' 400,
                'GRAD' 0,
                'opsz' 24
        }

        body {
            font-family: "Plus Jakarta Sans", sans-serif;
        }
    </style>
</head>

<body class="bg-background-light dark:bg-background-dark min-h-screen text-text-main-light dark:text-text-main-dark transition-colors duration-200">
    <div class="flex h-screen w-full overflow-hidden">
        <aside class="hidden lg:flex flex-col w-72 border-r border-border-light dark:border-border-dark bg-background-light dark:bg-background-dark p-6 h-full justify-between">
            <div class="flex flex-col gap-8">
                <div class="flex items-center gap-3 px-2">
                    <div class="bg-primary/20 p-2 rounded-lg">
                        <span class="material-symbols-outlined text-primary text-3xl">pets</span>
                    </div>
                    <div>
                        <h1 class="text-xl font-bold tracking-tight">ASSAD</h1>
                        <p class="text-text-sec-light dark:text-text-sec-dark text-xs uppercase tracking-wider font-semibold">Guide Space</p>
                    </div>
                </div>
                <nav class="flex flex-col gap-2">
                    <a class="flex items-center gap-3 px-4 py-3 rounded-xl text-text-main-light dark:text-text-sec-dark hover:bg-border-light dark:hover:bg-surface-dark transition-colors font-medium" href="index.php">
                        <span class="material-symbols-outlined text-text-sec-light dark:text-text-sec-dark">dashboard</span>
                        <span>Tableau de bord</span>
                    </a>
                    <a class="flex items-center gap-3 px-4 py-3 rounded-xl text-text-main-light dark:text-text-sec-dark hover:bg-border-light dark:hover:bg-surface-dark transition-colors font-medium" href="mes_visites.php">
                        <span class="material-symbols-outlined text-text-sec-light dark:text-text-sec-dark">map</span>
                        <span>Mes Visites</span>
                    </a>
                    <a class="flex items-center gap-3 px-4 py-3 rounded-xl text-text-main-light dark:text-text-sec-dark hover:bg-border-light dark:hover:bg-surface-dark transition-colors font-medium" href="reservations.php">
                        <span class="material-symbols-outlined text-text-sec-light dark:text-text-sec-dark">groups</span>
                        <span>Réservations</span>
                    </a>
                    <a class="flex items-center gap-3 px-4 py-3 rounded-xl bg-primary/10 text-primary dark:text-primary font-bold" href="#">
                        <span class="material-symbols-outlined">settings</span>
                        <span>Paramètres</span>
                    </a>
                </nav>
            </div>
            <div class="flex items-center gap-3 px-4 py-3 rounded-xl bg-surface-light dark:bg-surface-dark border border-border-light dark:border-border-dark shadow-sm">
                <div class="bg-center bg-cover rounded-full h-10 w-10 border-2 border-primary" data-alt="Portrait du guide" style='background-image: url("<?= $profile_data['profile_picture_url'] ?>");'></div>
                <div class="flex flex-col overflow-hidden">
                    <p class="text-sm font-bold truncate"><?= $nom_utilisateur ?></p>
                    <p class="text-text-sec-light dark:text-text-sec-dark text-xs truncate">Guide <?= $role_utilisateur ?></p>
                </div>
            </div>
        </aside>
        <main class="flex-1 flex flex-col h-full overflow-y-auto overflow-x-hidden">
            <div class="lg:hidden flex items-center justify-between p-4 border-b border-border-light dark:border-border-dark bg-surface-light dark:bg-surface-dark sticky top-0 z-20">
                <span class="material-symbols-outlined text-primary">pets</span>
                <span class="material-symbols-outlined text-text-main-light dark:text-text-main-dark">menu</span>
            </div>
            
            <div class="p-6 md:p-10 max-w-4xl mx-auto w-full flex flex-col gap-10">
                <div class="flex flex-col gap-2 border-b border-border-light dark:border-border-dark pb-4">
                    <h2 class="text-3xl md:text-4xl font-extrabold tracking-tight">Paramètres du compte</h2>
                    <p class="text-text-sec-light dark:text-text-sec-dark text-lg">Gérez vos informations personnelles et vos préférences de sécurité.</p>
                </div>

                <?php if ($success_message): ?>
                    <div class="p-4 bg-green-100 dark:bg-green-900/40 border border-green-300 dark:border-green-700/50 text-green-700 dark:text-green-300 rounded-lg flex items-start gap-3" role="alert">
                        <span class="material-symbols-outlined text-green-700 dark:text-green-300">check_circle</span>
                        <p class="text-sm font-medium"><?= $success_message ?></p>
                    </div>
                <?php endif; ?>
                <?php if ($error_message): ?>
                    <div class="p-4 bg-red-100 dark:bg-red-900/40 border border-red-300 dark:border-red-700/50 text-red-700 dark:text-red-300 rounded-lg flex items-start gap-3" role="alert">
                        <span class="material-symbols-outlined text-red-700 dark:text-red-300">error</span>
                        <p class="text-sm font-medium"><?= $error_message ?></p>
                    </div>
                <?php endif; ?>

                <div class="bg-surface-light dark:bg-surface-dark rounded-xl border border-border-light dark:border-border-dark shadow-lg">
                    <div class="p-6 border-b border-border-light dark:border-border-dark flex justify-between items-center">
                        <h3 class="text-xl font-bold flex items-center gap-2">
                            <span class="material-symbols-outlined text-primary">person</span>
                            Informations personnelles
                        </h3>
                    </div>
                    <form method="POST" action="parametres.php" class="p-6 grid grid-cols-1 md:grid-cols-2 gap-6">
                        
                        <div class="col-span-1 md:col-span-2 flex items-center gap-4">
                            <div class="h-16 w-16 rounded-full bg-cover bg-center border-2 border-primary shrink-0" style="background-image: url('<?= $profile_data['profile_picture_url'] ?>');"></div>
                            <div>
                                <label for="photo" class="block text-sm font-medium text-text-main-light dark:text-text-main-dark mb-1">Photo de profil</label>
                                <input type="file" id="photo" name="profile_picture" class="block w-full text-sm text-text-sec-light dark:text-text-sec-dark
                                    file:mr-4 file:py-2 file:px-4
                                    file:rounded-full file:border-0
                                    file:text-sm file:font-semibold
                                    file:bg-primary/10 file:text-primary
                                    hover:file:bg-primary/20
                                " />
                            </div>
                        </div>
                        
                        <div>
                            <label for="first_name" class="block text-sm font-medium text-text-sec-light dark:text-text-sec-dark mb-1">Prénom</label>
                            <input type="text" id="first_name" name="first_name" value="<?= htmlspecialchars($profile_data['first_name']) ?>" required
                                class="w-full px-4 py-2 border border-border-light dark:border-border-dark rounded-lg bg-background-light dark:bg-surface-dark/50 focus:border-primary focus:ring-primary text-text-main-light dark:text-text-main-dark" />
                        </div>
                        
                        <div>
                            <label for="last_name" class="block text-sm font-medium text-text-sec-light dark:text-text-sec-dark mb-1">Nom de famille</label>
                            <input type="text" id="last_name" name="last_name" value="<?= htmlspecialchars($profile_data['last_name']) ?>" required
                                class="w-full px-4 py-2 border border-border-light dark:border-border-dark rounded-lg bg-background-light dark:bg-surface-dark/50 focus:border-primary focus:ring-primary text-text-main-light dark:text-text-main-dark" />
                        </div>
                        
                        <div>
                            <label for="email" class="block text-sm font-medium text-text-sec-light dark:text-text-sec-dark mb-1">Email (Non modifiable)</label>
                            <input type="email" id="email" value="<?= htmlspecialchars($profile_data['email']) ?>" disabled
                                class="w-full px-4 py-2 border border-border-light dark:border-border-dark rounded-lg bg-gray-50 dark:bg-gray-800/50 text-text-sec-light dark:text-text-sec-dark cursor-not-allowed" />
                        </div>
                        
                        <div>
                            <label for="phone" class="block text-sm font-medium text-text-sec-light dark:text-text-sec-dark mb-1">Téléphone</label>
                            <input type="tel" id="phone" name="phone" value="<?= htmlspecialchars($profile_data['phone']) ?>"
                                class="w-full px-4 py-2 border border-border-light dark:border-border-dark rounded-lg bg-background-light dark:bg-surface-dark/50 focus:border-primary focus:ring-primary text-text-main-light dark:text-text-main-dark" />
                        </div>
                        
                        <div class="col-span-1 md:col-span-2">
                            <label for="bio" class="block text-sm font-medium text-text-sec-light dark:text-text-sec-dark mb-1">Biographie / Description (Apparaît sur vos visites)</label>
                            <textarea id="bio" name="bio" rows="3"
                                class="w-full px-4 py-2 border border-border-light dark:border-border-dark rounded-lg bg-background-light dark:bg-surface-dark/50 focus:border-primary focus:ring-primary text-text-main-light dark:text-text-main-dark resize-none"><?= htmlspecialchars($profile_data['bio']) ?></textarea>
                        </div>
                        
                        <div class="col-span-1 md:col-span-2 flex justify-end">
                            <button type="submit" name="update_profile" class="flex items-center gap-2 bg-primary hover:bg-primary/90 text-white px-6 py-2.5 rounded-lg font-bold transition-all transform">
                                <span class="material-symbols-outlined text-[20px]">save</span>
                                <span>Sauvegarder les modifications</span>
                            </button>
                        </div>
                    </form>
                </div>
                
                <div class="bg-surface-light dark:bg-surface-dark rounded-xl border border-border-light dark:border-border-dark shadow-lg">
                    <div class="p-6 border-b border-border-light dark:border-border-dark flex justify-between items-center">
                        <h3 class="text-xl font-bold flex items-center gap-2">
                            <span class="material-symbols-outlined text-primary">lock</span>
                            Sécurité
                        </h3>
                    </div>
                    <form method="POST" action="parametres.php" class="p-6 grid grid-cols-1 md:grid-cols-2 gap-6">
                        
                        <div>
                            <label for="old_password" class="block text-sm font-medium text-text-sec-light dark:text-text-sec-dark mb-1">Ancien mot de passe</label>
                            <input type="password" id="old_password" name="old_password" required
                                class="w-full px-4 py-2 border border-border-light dark:border-border-dark rounded-lg bg-background-light dark:bg-surface-dark/50 focus:border-primary focus:ring-primary text-text-main-light dark:text-text-main-dark" />
                        </div>
                        
                        <div></div>
                        
                        <div>
                            <label for="new_password" class="block text-sm font-medium text-text-sec-light dark:text-text-sec-dark mb-1">Nouveau mot de passe</label>
                            <input type="password" id="new_password" name="new_password" required
                                class="w-full px-4 py-2 border border-border-light dark:border-border-dark rounded-lg bg-background-light dark:bg-surface-dark/50 focus:border-primary focus:ring-primary text-text-main-light dark:text-text-main-dark" />
                        </div>
                        
                        <div>
                            <label for="confirm_password" class="block text-sm font-medium text-text-sec-light dark:text-text-sec-dark mb-1">Confirmer le nouveau mot de passe</label>
                            <input type="password" id="confirm_password" name="confirm_password" required
                                class="w-full px-4 py-2 border border-border-light dark:border-border-dark rounded-lg bg-background-light dark:bg-surface-dark/50 focus:border-primary focus:ring-primary text-text-main-light dark:text-text-main-dark" />
                        </div>
                        
                        <div class="col-span-1 md:col-span-2 flex justify-end">
                            <button type="submit" name="change_password" class="flex items-center gap-2 bg-text-sec-light dark:bg-text-sec-dark hover:bg-text-sec-light/80 text-white dark:text-text-main-dark px-6 py-2.5 rounded-lg font-bold transition-all">
                                <span class="material-symbols-outlined text-[20px]">vpn_key</span>
                                <span>Changer le mot de passe</span>
                            </button>
                        </div>
                    </form>
                </div>

                <div class="bg-red-50 dark:bg-red-900/10 rounded-xl border border-red-200 dark:border-red-900/30 shadow-lg p-6 flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
                    <div>
                        <h3 class="text-xl font-bold text-red-700 dark:text-red-400">Déconnexion</h3>
                        <p class="text-sm text-red-600 dark:text-red-300">Cliquez ici pour vous déconnecter de votre espace guide.</p>
                    </div>
                    <a href="deconnexion.php" class="flex items-center gap-2 bg-red-600 hover:bg-red-700 text-white px-6 py-2.5 rounded-lg font-bold transition-colors shrink-0">
                        <span class="material-symbols-outlined text-[20px]">logout</span>
                        <span>Se déconnecter</span>
                    </a>
                </div>
                
            </div>
        </main>
    </div>
</body>

</html>