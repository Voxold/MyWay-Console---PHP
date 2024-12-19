
// Object mapping each region to its cities
const citiesByRegion = {
  "tanger-tetouan-al-hoceima": ["Tanger", "Tétouan", "Al Hoceïma", "Larache", "Chefchaouen", "Ouezzane"],
  "oriental": ["Oujda", "Nador", "Berkane", "Taourirt", "Jerada", "Driouch"],
  "fes-meknes": ["Fès", "Meknès", "Ifrane", "Taza", "El Hajeb", "Sefrou"],
  "rabat-sale-kenitra": ["Rabat", "Salé", "Kénitra", "Sidi Slimane", "Témara", "Skhirat"],
  "beni-mellal-khenifra": ["Béni Mellal", "Khénifra", "Azilal", "Fquih Ben Salah", "Kasba Tadla"],
  "casablanca-settat": ["Casablanca", "Settat", "El Jadida", "Berrechid", "Mohammédia", "Mediouna"],
  "marrakech-safi": ["Marrakech", "Safi", "Essaouira", "Chichaoua", "Youssoufia"],
  "draâ-tafilalet": ["Errachidia", "Ouarzazate", "Zagora", "Tinghir", "Midelt"],
  "souss-massa": ["Agadir", "Taroudant", "Tiznit", "Inezgane", "Chtouka Ait Baha"],
  "guelmim-oued-noun": ["Guelmim", "Tan-Tan", "Sidi Ifni", "Assa-Zag"],
  "laayoune-sakia-el-hamra": ["Laâyoune", "Boujdour", "Tarfaya", "Es-Semara"],
  "dakhla-oueled-ed-dahab": ["Dakhla", "Aousserd"]
};

const regionSelect = document.getElementById("region");
const citySelect = document.getElementById("city");

// Event listener to update cities based on selected region
regionSelect.addEventListener("change", function() {
  const selectedRegion = this.value;
  const cities = citiesByRegion[selectedRegion] || [];

// Clear previous cities
citySelect.innerHTML = '<option value="" disabled selected>sélectionner une ville</option>';

// Add new cities
cities.forEach(city => {
    const option = document.createElement("option");
    option.value = city.toLowerCase().replace(/\s+/g, "-");
    option.textContent = city;
    citySelect.appendChild(option);
    });
});