<?php
// Nama       : Hamzah Fauzi
// Mata tugas : Latihan PHP - Pertemuan 6
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Hamzah Fauzi">
    <title>Hamzah Fauzi | Latihan Perulangan PHP</title>
    <style>
        :root {
            --navy: #17243b;
            --navy-soft: #263b58;
            --teal: #16a995;
            --teal-light: #d9f5f0;
            --green-soft: #e4f4e8;
            --yellow-soft: #fff4c7;
            --cyan-soft: #dff6fb;
            --ink: #263247;
            --muted: #718096;
            --line: #d9e2ec;
            --page: #f2f6fa;
            --white: #ffffff;
        }

        * { box-sizing: border-box; }

        body {
            margin: 0;
            padding: 34px 18px 45px;
            color: var(--ink);
            background: var(--page);
            font-family: "Segoe UI", Arial, sans-serif;
        }

        .container { width: 100%; max-width: 1100px; margin: 0 auto; }

        .topbar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 16px;
            margin-bottom: 22px;
            padding: 20px 24px;
            border-radius: 16px;
            color: var(--white);
            background: linear-gradient(115deg, var(--navy), var(--navy-soft));
            box-shadow: 0 12px 28px rgba(23,36,59,.13);
        }

        .topbar small {
            display: block;
            margin-bottom: 5px;
            color: #9fe8dd;
            font-size: 10px;
            font-weight: 800;
            letter-spacing: 1.8px;
            text-transform: uppercase;
        }

        .topbar h1 { margin: 0; font-size: clamp(21px, 4vw, 29px); letter-spacing: -.5px; }
        .student { color: #d5dfeb; font-size: 13px; text-align: right; line-height: 1.6; }
        .student strong { display: block; color: white; font-size: 15px; }

        .section-card {
            margin-bottom: 20px;
            padding: 24px;
            border: 1px solid var(--line);
            border-radius: 16px;
            background: var(--white);
            box-shadow: 0 8px 24px rgba(23,36,59,.055);
        }

        .section-heading {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 8px;
        }

        .number {
            display: grid;
            width: 34px;
            height: 34px;
            flex: 0 0 34px;
            place-items: center;
            border-radius: 10px;
            color: var(--teal-dark, #087f73);
            background: var(--teal-light);
            font-size: 14px;
            font-weight: 800;
        }

        h2 { margin: 0; color: var(--navy); font-size: 19px; }
        .description { margin: 0 0 18px 46px; color: var(--muted); font-size: 13px; line-height: 1.6; }

        .even-list { display: flex; flex-wrap: wrap; gap: 9px; margin-left: 46px; }
        .even-number {
            display: grid;
            min-width: 48px;
            height: 43px;
            place-items: center;
            border: 1px solid #b9e7df;
            border-radius: 10px;
            color: #087f73;
            background: #e9faf6;
            font-size: 17px;
            font-weight: 800;
        }

        .table-wrap {
            overflow-x: auto;
            margin-top: 18px;
            padding: 4px 2px 8px;
            border-radius: 10px;
        }

        table {
            width: 100%;
            min-width: 700px;
            border-collapse: separate;
            border-spacing: 3px;
            table-layout: fixed;
        }

        caption {
            padding: 0 0 12px;
            color: var(--muted);
            font-size: 12px;
            text-align: left;
        }

        th, td {
            height: 43px;
            padding: 7px 5px;
            border: 1px solid rgba(23,36,59,.09);
            border-radius: 5px;
            text-align: center;
            font-size: 14px;
            font-weight: 650;
        }

        thead th {
            color: white;
            background: var(--teal);
        }

        thead th:first-child {
            width: 104px;
            color: var(--navy);
            background: #edf2f7;
        }

        tbody th {
            color: var(--navy);
            background: var(--green-soft);
            text-align: left;
            padding-left: 13px;
        }

        .hasil-ganjil { color: #765a00; background: var(--yellow-soft); }
        .hasil-genap { color: #126a80; background: var(--cyan-soft); }

        .legend {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            margin-top: 13px;
            color: var(--muted);
            font-size: 11px;
        }

        .legend-item { display: inline-flex; align-items: center; gap: 7px; }
        .swatch { width: 12px; height: 12px; border-radius: 3px; border: 1px solid rgba(0,0,0,.08); }
        .swatch.even { background: var(--cyan-soft); }
        .swatch.odd { background: var(--yellow-soft); }

        .footer {
            margin-top: 18px;
            color: #8793a3;
            font-size: 11px;
            text-align: center;
        }

        @media (max-width: 600px) {
            body { padding: 20px 11px 30px; }
            .topbar { align-items: flex-start; padding: 18px; }
            .student { font-size: 11px; }
            .student strong { font-size: 13px; }
            .section-card { padding: 18px 14px; }
            .description, .even-list { margin-left: 0; }
            .description { margin-top: 12px; }
            h2 { font-size: 16px; }
        }
    </style>
</head>
<body>
    <main class="container">
        <header class="topbar">
            <div>
                <small>Praktikum Pemrograman</small>
                <h1>Latihan Perulangan PHP</h1>
            </div>
            <div class="student">
                Tugas Pertemuan 6
                <strong>Hamzah Fauzi</strong>
            </div>
        </header>

        <section class="section-card" aria-labelledby="genap-title">
            <div class="section-heading">
                <span class="number">01</span>
                <h2 id="genap-title">Bilangan Genap 1–10</h2>
            </div>
            <p class="description">Perulangan <code>for</code> digunakan untuk memeriksa angka dari 1 sampai 10. Angka yang habis dibagi 2 ditampilkan sebagai bilangan genap.</p>
            <div class="even-list">
                <?php
                    for ($angka = 1; $angka <= 10; $angka++) {
                        if ($angka % 2 == 0) {
                            echo '<span class="even-number">' . $angka . '</span>';
                        }
                    }
                ?>
            </div>
        </section>

        <section class="section-card" aria-labelledby="table-title">
            <div class="section-heading">
                <span class="number">02</span>
                <h2 id="table-title">Tabel Perkalian 1–10</h2>
            </div>
            <p class="description">Tabel dibuat menggunakan dua perulangan <code>for</code> yang saling bersarang. Warna sel dibedakan berdasarkan hasil perkaliannya.</p>

            <div class="table-wrap">
                <table>
                    <caption>Hasil perkalian setiap bilangan dari 1 sampai 10.</caption>
                    <thead>
                        <tr>
                            <th scope="col">Bilangan</th>
                            <?php for ($kolom = 1; $kolom <= 10; $kolom++) { ?>
                                <th scope="col"><?php echo $kolom; ?></th>
                            <?php } ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php for ($baris = 1; $baris <= 10; $baris++) { ?>
                            <tr>
                                <th scope="row"><?php echo $baris; ?></th>
                                <?php for ($kolom = 1; $kolom <= 10; $kolom++) {
                                    $hasil = $baris * $kolom;
                                    $kelas = ($hasil % 2 == 0) ? 'hasil-genap' : 'hasil-ganjil';
                                ?>
                                    <td class="<?php echo $kelas; ?>"><?php echo $hasil; ?></td>
                                <?php } ?>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>

            <div class="legend" aria-label="Keterangan warna tabel">
                <span class="legend-item"><span class="swatch even"></span> Hasil genap</span>
                <span class="legend-item"><span class="swatch odd"></span> Hasil ganjil</span>
            </div>
        </section>

        <footer class="footer">Dikerjakan oleh Hamzah Fauzi · Tugas PHP Pertemuan 6</footer>
    </main>
</body>
</html>
