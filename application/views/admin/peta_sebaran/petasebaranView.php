<div class="page-title">
    <div class="title_left">
        <h3><?= $title ?></h3>
        <div id="map" style="width: 1080px; height: 700px;"></div>
        <script>
            var map = L.map('map').setView([-0.075819, 109.399202], 12);

            L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
                attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
                    'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
                id: 'mapbox/streets-v11',
            }).addTo(map);

            <?php
            $connections = mysqli_connect("localhost", "root", "", "datakeluargasejahtera");

            $sql = "select * from penduduk p inner join jenis_kb b on p.id_jenis_kb=b.id_jenis_kb inner join jenis_rt c on p.id_jenis_rt=c.id_jenis_rt inner join jenis_ks d on p.id_jenis_ks=d.id_jenis_ks inner join lokasi l on p.id_lokasi=l.id_lokasi";
            $data = mysqli_query($connections, $sql);
            $js = '';
            while ($row = mysqli_fetch_assoc($data)) {
                $js .= 'L.marker([
						' . $row['lat'] . ',
						' . $row['lng'] . '
						]).addTo(map)
						.bindPopup("<b> Nama :' . $row['nama_penduduk'] . '</b>' .
                    '</b><br>Nomor KK :' . $row['nomor_kk'] . '</b>' .
                    '</b><br>NIK :' . $row['nik'] . '</b>' .
                    '</b><br>Jenis Kelamin :' . $row['jenis_kelamin'] . '</b>' .
                    '</b><br>Tanggal Lahir :' . $row['tanggal_lahir'] . '</b>' .
                    '</b><br>Alamat :' . $row['alamat'] . '</b>' .
                    '</b><br>Jenis KB :' . $row['nama_kb'] . '</b>' .
                    '</b><br>Jenis RT :' . $row['rt_rw'] . '</b>' .
                    '</b><br>Jenis KS :' . $row['nama_ks'] . '</b>' . '");
						';
            }
            // menampilkan script js hasil dari looping diatas
            echo $js;

            ?>
        </script>

    </div>
</div>