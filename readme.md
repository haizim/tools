# HAIZIM TOOLS
---
### Deskripsi
Kumpulan tools berbasis web sederhana yang dibuat untuk membantu berbagai tugas pengembangan dan produktivitas sehari-hari. Proyek ini menggunakan teknologi web modern seperti Alpine.js dan Tailwind CSS untuk antarmuka yang responsif dan ringan.

### List Tool

***index.php***

Halaman utama untuk navigasi ke berbagai tools yang tersedia.

Fitur :
- Auto-list Files : Secara otomatis mendeteksi dan menampilkan file di direktori.
- Navigasi Cepat : Link langsung ke setiap tool di dalam proyek.

***excel-merger.html***

Alat untuk menggabungkan beberapa file Excel menjadi satu.

Fitur :
- Seret & lepas (Drag & Drop) banyak file Excel.
- Informasi total file, sheet, dan ukuran file.
- Proses penggabungan langsung di sisi klien (browser).

***html-formatter.html***

Alat untuk memformat dan meminifikasi kode HTML.

Fitur :
- Format HTML (Beautify) : Merapikan kode HTML yang berantakan dengan indentasi yang benar.
- Minify HTML : Mengompres kode HTML untuk ukuran file yang lebih kecil.
- Copy to Clipboard : Menyalin hasil format/minify dengan satu klik.
- Syntax Highlighting : Mewarnai kode untuk keterbacaan yang lebih baik.

***html-viewer.html***

Penampil HTML real-time dengan berbagai mode tampilan.

Fitur :
- Editor Source Code : Edit kode HTML secara langsung.
- Live Preview : Lihat hasil perubahan kode secara instan.
- Split View : Tampilan berdapingan antara kode dan preview.
- Mobile View : Simulasi tampilan pada perangkat seluler.
- Fullscreen View : Tampilan penuh untuk fokus maksimal.

***ai-html-viewer.html***

Penampil HTML dengan bantuan AI untuk generate dan edit kode secara interaktif.

Fitur :
- Live Preview : Lihat hasil perubahan kode secara instan.
- AI Chat : Integrasi dengan OpenRouter untuk generate/edit kode HTML menggunakan AI.
- Syntax Highlighting : Pewarnaan sintaks untuk keterbacaan yang lebih baik.
- Multiple View Modes : Split view, code only, atau preview only.
- Code Download : Unduh hasil kode HTML lengkap.
- Chat History : Riwayat percakapan tersimpan di localStorage.

***img2pdf.html***

Konversi file gambar menjadi format dokumen PDF.

Fitur :
- Mendukung berbagai format gambar (JPG, PNG, WEBP, GIF, BMP).
- Bisa memproses banyak file gambar sekaligus.
- Urutkan gambar dan atur orientasi sesuai kebutuhan sebelum dikonversi.

***invoice.html***

Generator tagihan atau invoice (MWH Invoice Tracker).

Fitur :
- Form dinamis untuk mengisi detail pelanggan, tanggal jatuh tempo, dan item.
- Tersedia opsi untuk menyimpan atau mencetak invoice secara langsung ke bentuk PDF.
- Tampilan antarmuka yang modern, responsif, dan elegan.

***json-analyzer.html***

Analisis data JSON menggunakan kekuatan AI via OpenRouter.

Fitur :
- JSON Editor : Editor JSON dengan syntax highlighting dan validasi.
- Upload File JSON : Impor data JSON langsung dari file.
- Chat dengan AI : Tanya jawab tentang data JSON dengan bantuan AI.
- Dukungan Markdown : Render respon AI dengan format Markdown yang rapi.
- Model Selection : Pilih model AI yang sesuai kebutuhan (OpenAI, Anthropic, dll).

***json-formatter.html***

Formatter dan validator JSON yang mudah digunakan.

Fitur :
- Format JSON : Merapikan JSON string menjadi format yang mudah dibaca.
- Syntax Highlighting : Pewarnaan sintaks untuk membedakan kunci dan nilai.
- Validasi Error : Mendeteksi dan menampilkan kesalahan pada struktur JSON.
- Copy Result : Salin hasil format ke clipboard.
- Dark/Light Mode : Antarmuka yang nyaman digunakan siang atau malam.

***json-map.html***

Visualisasi struktur data JSON dalam bentuk diagram pohon (Tree View).

Fitur :
- Visualisasi Interaktif : Eksplorasi struktur JSON secara visual.
- Zoom In/Out : Perbesar atau perkecil tampilan diagram.
- Collapsible Nodes : Lipat atau buka cabang node untuk fokus pada bagian tertentu.
- Live Edit : Edit data JSON dan lihat pembaruan visual secara real-time.
- Dark/Light Mode : Mendukung tema gelap dan terang.

***json-transformer.html***

Alat untuk mentransformasi dan memodifikasi struktur JSON.

Fitur :
- Transformasi data JSON yang kompleks dengan cepat.
- Editor kode interaktif untuk manipulasi data payload JSON.
- UI yang adaptif dan sederhana untuk proses konversi antar node/field.

***js-console.html***

Konsol JavaScript untuk menulis, mengetes, dan men-debug kode JavaScript langsung di browser.

Fitur :
- Code Editor : Editor kode dengan syntax highlighting dan line numbers.
- Console Output : Output console lengkap (console.log, errors, warnings).
- Quick Snippets : Kumpulan snippet kode yang sering digunakan.
- Auto-run : Jalankan kode secara otomatis saat tombol ditekan.
- Clear Output : Bersihkan output dengan satu klik.
- Dark/Light Mode : Tema gelap dan terang untuk kenyamanan visual.

***list-compare.html***

Aplikasi komparasi dua daftar (list) teks atau objek.

Fitur :
- Bandingkan dua buah list secara efisien sekaligus cek perbedaannya.
- Menyoroti nilai-nilai yang sama atau yang hanya ada di salah satu versi list.
- Tampilan berdampingan (side-by-side) untuk evaluasi yang lebih jelas.

***openrouter-client.html***

Klien chat antarmuka web untuk berinteraksi dengan berbagai model AI melalui OpenRouter API.

Fitur :
- Multi-chat History : Menyimpan riwayat percakapan secara lokal.
- Pilihan Model AI : Mendukung banyak model seperti GPT-4, Claude 3, Llama 3, dll.
- Custom System Prompt : Atur instruksi sistem khusus untuk setiap chat.
- Streaming Response : Respon yang muncul secara bertahap (real-time).
- Markdown Rendering : Menampilkan kode dan teks format dengan indah.

***openrouter-image.html***

Klien mini OpenRouter untuk berinteraksi dengan fitur pembuatan gambar AI.

Fitur :
- Masukkan prompt teks untuk digenerasikan menjadi gambar.
- Penyimpanan mandiri di penyimpanan lokal browser agar riwayat tidak hilang.
- Mendukung mode gelap/terang antarmuka secara adaptif.

***openrouter-img-edit.html***

Editor gambar interaktif dengan dukungan AI via OpenRouter.

Fitur :
- Memodifikasi atau memperbaiki area pada gambar dengan deskripsi teks prompt.
- Penyimpanan di IndexedDB (IDB) agar file gambar dan riwayat edit berukuran besar dapat tersimpan tangguh tanpa backend.
- Mendukung format web umum (.jpg, .png).

***password-generator.html***

Generator password (PassForge) untuk menghasilkan kata sandi yang aman.

Fitur :
- Pengaturan kustom panjang kata sandi dan pemilihan format karakter (huruf, angka, simbol).
- Mode "Human Readable": membatasi jumlah deret konsonan agar kata sandi sedikit lebih gampang diingat atau dieja.
- Fasilitas salin sekali tekan (one-click copy) yang cerdas.

***pdf-merger.html***

Aplikasi praktis untuk menggabungkan beberapa file dokumen PDF.

Fitur :
- Interaksi Drag & drop untuk menyusun beberapa PDF lalu digabungkan secara instan.
- Proses berjalan tanpa cloud upload atau server tambahan (privacy first).
- Desain antaramuka yang intuitif dan minimalis di beragam kondisi pencahayaan.

***print-termal-tes.html***

Generator halaman tes cetak untuk mesin printer thermal (struk atau kasir).

Fitur :
- Dukungan Ukuran : Mendukung lebar kertas standar 58mm dan 80mm.
- Pengaturan Layout : Kustomisasi margin dasar dan pengaturan skala tulisan.
- Pola Tes Terotomatisasi : Cetak pola alignment dan density untuk cek head kualitas dot.
- Integrasi kode batang (barcode) untuk uji respon mesin pencetak.

***print-tes.html***

Generator halaman kalibrasi/tes uji cetak standar untuk printer kartrid ukuran A4.

Fitur :
- Tes Warna Mendasar : Area warna CMYK dan RGB yang padat untuk kalibrasi tintanya.
- Uji Ketajaman Resolusi : Teks berbagai dimensi poin (6pt - 14pt) melayani perbaikan presisi tulisan.
- Layout dan Pola Grid : Mengonfirmasi apakah margin dan presisi pencetakan berada lurus di pusat.
- Opsi Informasi : Tanggal dan jam pembuatan stiker tes otomatis dirender.

***spreadsheet-analyzer.html***

Alat pintar untuk mengulas dan memproses file spreadsheet komersial(.xlsx, .csv) dengan bantuan AI.

Fitur :
- Import Cepat : Pemuatan sel interaktif dari file eksternal (Excel / CSV).
- Tampilan Tabel Transparan : Cek kembali masukan tabel langsung persis menyerupai kalkulasi kolom.
- Prompter AI Intuitif: Beri kueri langsung terhadap struktur tabel lewat OpenRouter.
- Pilihan model model AI teratas dari ragam sumber yang disediakan pengembang.
- Dark theme friendly.

***string-exp.html***

Alat manipulasi dan penjelajahan rentetan data string (String Explorer).

Fitur :
- Pilihan konversi variasi teks: case changer (Camel/Kebab/Snake), Regex, trimming, escaping komprehensif, dst.
- Pratinjau mutlak (absolute real-time preview) sewaktu data inti diketik.
- Dukungan klik-salin cepat setelah string siap dan diformat sempurna.

***time-converter.html***

Konverter unit waktu untuk menghitung berbagai satuan waktu dengan cepat dan akurat.

Fitur :
- Multi-unit Conversion : Konversi antara detik, menit, jam, hari, minggu, bulan, dan tahun.
- Real-time Calculation : Hasil konversi muncul secara instan saat input berubah.
- Copy Result : Salin hasil konversi ke clipboard dengan satu klik.
- Visual Display : Tampilan hasil yang jelas dan mudah dibaca.
- Dark/Light Mode : Tema gelap dan terang untuk kenyamanan pengguna.

***timestamp-converter.html***

Konverter antara format DateTime dan Unix Timestamp dengan dukungan berbagai zona waktu.

Fitur :
- DateTime to Timestamp : Konversi tanggal/waktu ke Unix timestamp (detik dan milidetik).
- Timestamp to DateTime : Konversi Unix timestamp ke format tanggal/waktu yang readable.
- Current Timestamp : Tampilkan timestamp saat ini secara real-time.
- Timezone Support : Konversi dengan berbagai zona waktu.
- Bulk Conversion : Konversi banyak timestamp sekaligus.
- Copy Result : Salin hasil konversi dengan cepat.

***table-converter.html***

Editor tabel visual dengan kemampuan ekspor meluas ke berbagai tipe bahasa atau notasi struktur.

Fitur :
- Live Table Editor : Edit dimensi tabel secara manual (atur lebar sel, tambah/hapus baris & kolom).
- Dukungan Pasang Langsung: Mampu menerima masukan data Copy-Paste dari aplikasi Office/Google Sheets.
- Ekspor Variatif Interaktif : Unduh maupun salin cepat tabel output berformat Markdown, JSON, HTML, hingga XML.
- Skema palet antarmuka yang modern dan responsif buat web.

***tailwind-editor-fomantic.html***

Editor halaman visual berbantu framework paduan elemen UI Fomantic & Tailwind CSS.

Fitur :
- Lingkungan pengeditan dokumen HTML yang langsung digambar oleh WYSIWYG editor interaktif.
- Mendukung pembaruan style terfokus lewat kelas utilitas sintaks Tailwind sekaligus komponen kaya yang ditawarkan Fomantic.
- Unduh struktur HTML paripurna usai revisi tampilan beres.

***todo-list.html***

Aplikasi manajemen papan dan tugas harian (Alpine Todo Pro) dengan fitur multi-pengelompokan canggih.

Fitur :
- Pengelompokan Tugas (Groups) tingkat lanjut : Kustomisasi papan agenda ke tiap blok spesifik.
- Fungsionalitas Drag & Drop : Kemudahan pengaturan ulang hierarki tugas di daftar dengan menarik objek sembarangan.
- Bar Progress Dinamis : Lacak seberapa tuntas beban kerja dari persen progress per kelompok.
- Local Storage Support : Agenda selalu utuh meski halaman ditinggalkan lewat localStorage.
- Kombinasi Tema Gelap eksklusif guna melindung mata pada jam produktivitas malam.

***wavespeed-img-edit.html***

Klien khusus sistem WaveSpeed untuk penyuntingan parameter gambar dari sisi peramban.

Fitur :
- Utilitas meremodel konfigurasi dan format gambar tanpa wajib mengupload ke peladen daring (backend upload).
- Tampilan desain bersih dengan skema respons instan (instant-feedback loops).
- Mudah menavigasikan pengalihan varian gelap/cerah demi pengalaman penyunting terbaik.

***yt-playlist-extractor.html***

Tool khusus penarik dan pengutip (Extractor) link daftar putar / Playlist YouTube.

Fitur :
- Proses kolektif cepat mengeruk seluruh metadata (judul dan id/URL) dari video terdaftar di dalam referensi halaman playlist spesifik.
- Presentasi data ringkas menjadi luaran daftar tautan yang bebas disalin gampang.
- Alternatif efisien bagi kurator media konten supaya bisa mendokumentasikan listnya otomatis ke aplikasi perangkum pribadi (semisal CSV maupun markdown notebook).
