@extends('layouts.app')

@section('title', 'kontak')

    
@sesction('content')    
    <section class="contact" id="kontak">
        <div class="container">
            <div class="section-title">
                <h2>Hubungi Kami</h2>
            </div>
            <div class="contact-content">
                <div class="contact-info">
                    <h3>Informasi Kontak</h3>
                    <div class="contact-details">
                        <p><i>📍</i> Jl. Panglima Sudirman No. 123, Kota Jakarta</p>
                        <p><i>📞</i> Nomor Darurat: 113</p>
                        <p><i>📞</i> Kantor: (021) 5551234</p>
                        <p><i>✉️</i> info@damkar.go.id</p>
                    </div>
                </div>
                <div class="contact-form">
                    <h3>Kirim Pesan</h3>
                    <form>
                        <div class="form-group">
                            <label for="name">Nama Lengkap</label>
                            <input type="text" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="subject">Subjek</label>
                            <input type="text" id="subject" name="subject" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Pesan</label>
                            <textarea id="message" name="message" required></textarea>
                        </div>
                        <button type="submit" class="cta-button">Kirim Pesan</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsesction
