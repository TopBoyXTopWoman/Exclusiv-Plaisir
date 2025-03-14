// Fonction pour basculer l'affichage des sections
function toggleSection(sectionId) {
    const section = document.getElementById(sectionId);
    
    // Si la section est actuellement cachée, on l'affiche
    if (section.classList.contains('hidden')) {
        section.classList.remove('hidden');
    } else {
        // Sinon, on la cache
        section.classList.add('hidden');
    }
}
