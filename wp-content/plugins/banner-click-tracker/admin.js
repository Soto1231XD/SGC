jQuery(document).ready(function($) {
    // Datos simulados para la gráfica y la tabla
    var clickData = [
        { id: 1, usuario: 'Usuario 1', correo: 'admin1@test.com', ip: '255.255.255.0', banner: 'Banner 1', clics: 23 },
        { id: 2, usuario: 'Usuario 2', correo: 'admin2@test.com', ip: '255.255.255.1', banner: 'Banner 2', clics: 43 },
        { id: 3, usuario: 'Usuario 3', correo: 'admin3@test.com', ip: '197.145.123', banner: 'Banner 3', clics: 54 },
        { id: 4, usuario: 'Usuario 4', correo: 'admin4@test.com', ip: '192.167.0.8', banner: 'Banner 4', clics: 22 },
        { id: 5, usuario: 'Usuario 5', correo: 'admin5@test.com', ip: '192.156.10.0', banner: 'Banner 5', clics: 12 }
    ];

    // Inicializar la tabla con los datos
    var tableBody = $('#data-table tbody');
    clickData.forEach(function(row) {
        tableBody.append('<tr><td>' + row.id + '</td><td>' + row.usuario + '</td><td>' + row.correo + '</td><td>' + row.ip + '</td><td>' + row.banner + '</td><td>' + row.clics + '</td></tr>');
    });

    // Inicializar la gráfica con los datos
    var ctx = document.getElementById('clicksChart').getContext('2d');
    var clicksChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: clickData.map(function(row) { return row.banner; }),
            datasets: [{
                label: 'Clics',
                data: clickData.map(function(row) { return row.clics; }),
                backgroundColor: 'rgba(106, 90, 205, 0.5)',
                borderColor: 'rgba(106, 90, 205, 1)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    // Manejar el filtrado de datos
    $('#filters').submit(function(event) {
        event.preventDefault();
        var dateStart = $('#date-start').val();
        var dateEnd = $('#date-end').val();
        var bannerName = $('#banner-name').val();
        var userName = $('#user-name').val();

        // Filtrar los datos según los criterios de búsqueda (simulación)
        var filteredData = clickData.filter(function(row) {
            return (!bannerName || row.banner.includes(bannerName)) &&
                   (!userName || row.usuario.includes(userName));
        });

        // Actualizar la tabla con los datos filtrados
        tableBody.empty();
        filteredData.forEach(function(row) {
            tableBody.append('<tr><td>' + row.id + '</td><td>' + row.usuario + '</td><td>' + row.correo + '</td><td>' + row.ip + '</td><td>' + row.banner + '</td><td>' + row.clics + '</td></tr>');
        });

        // Actualizar la gráfica con los datos filtrados
        clicksChart.data.labels = filteredData.map(function(row) { return row.banner; });
        clicksChart.data.datasets[0].data = filteredData.map(function(row) { return row.clics; });
        clicksChart.update();
    });
});
