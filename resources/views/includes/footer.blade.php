<div class="footer">
    <div class="contact-info">
        <div class="contact-heading">
            <div>Hubungi Kami</div>
            <div>Rumah Sehat Herbal Inti Sehat TCM</div>
        </div>

        <div class="contact-grid">
            <div class="contact-item">
                <img src="{{ asset('images/hp.png') }}" alt="Phone Icon" class="contact-icon">
                <div>0851-4299-8875</div>
            </div>
            <div class="contact-item">
                <a href="https://wa.me/6287823319466" target="_blank" class="contact-link">
                    <img src="{{ asset('images/wa.png') }}" alt="WhatsApp Icon" class="contact-icon">
                    <div>0878-2331-9466</div>
                </a>
            </div>
            <div class="contact-item">
                <img src="{{ asset('images/ig.png') }}" alt="Instagram Icon" class="contact-icon">
                <div>
                    <a href="https://www.instagram.com/rumahsehatherbaltcm/?utm_source=ig_web_button_share_sheet" target="_blank" class="white-link">Rumah Sehat Herbal TCM</a>
                </div>
            </div>
            <div class="contact-item">
                <img src="{{ asset('images/fb.png') }}" alt="Facebook Icon" class="contact-icon">
                <div>
                    <a href="https://www.facebook.com/profile.php?id=61558812080309&mibextid=rS40aB7S9Ucbxw6v" target="_blank" class="white-link">Rumah TCM</a>
                </div>
            </div>
            <div class="contact-item">
                <img src="{{ asset('images/lokasi.png') }}" alt="Location Icon" class="contact-icon">
                <div>Jln. Kudus No.36 RT 05 Tanah Haji Permai, Lingkungan Punia Saba, Kelurahan Punia, Kecamatan Mataram, Kota Mataram, Provinsi Nusa Tenggara Barat</div>
            </div>
        </div>
    </div>
    <div class="maps-button">
        <a href="https://maps.app.goo.gl/iRQ7jPagApLt6WZx5" class="button">Klik untuk melihat Maps</a>
        <div style="margin-top: 20px;">
            <img src="{{ asset('images/logo.png') }}" alt="Logo" width="210" height="200">
        </div>
    </div>
    <div class="footer-bottom">
        <div class="copyright">
            &copy; {{ date('Y') }} | Rumah Sehat Herbal Inti Sehat TCM. All rights reserved.
        </div>
        <div class="back-to-top">
            <a href="#" id="back-to-top">
                <img src="{{ asset('images/top.png') }}" alt="Back to Top Icon">
            </a>
        </div>
    </div>
</div>

<script>
    document.getElementById('back-to-top').addEventListener('click', function(event) {
        event.preventDefault();
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });
</script>
