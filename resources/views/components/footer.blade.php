<footer class="page">
    <div id="footer-left">
        <h3>Pratite nas!</h3>
        <div id="icons">
            <a href="https://www.instagram.com/workshop.and.travel/" class="icon-instagram"></a>
            <a href="#" class="icon-facebook"></a>
        </div>
    </div>
    <div id="footer-right">
        <h3 id="Kontakt">Kontakt</h3>
        @if(session('success'))
            <p style="color:white;font-size:20px;">{{session('success')}}</p>
        @endif
        <form action="{{route('posaljiPoruku')}}" method="POST">
            {{csrf_field()}}
            <table>
                <tr>
                    <td>
                            <input class="form-control form-control-lg" type="text" required placeholder="Ime" name="ime" autocomplete="given-name">
                            <input class="form-control form-control-lg" type="text" required placeholder="Prezime" name="prezime" autocomplete="family-name">
                            <input class="form-control form-control-lg" type="email" required placeholder="Email" name="email" autocomplete="email" >
                            <input class="form-control form-control-lg" type="tel" placeholder="Telefon (opciono)" name="telefon" autocomplete="tel">     
                    </td>
                    <td>
                        <textarea class="form-control" name="text" placeholder="Poruka" rows="10" cols="40" required></textarea>
                    </td>
                </tr>
                <tr>
                    <td>
                        <button class="button clickable" type="submit" id="sendMail">Pošalji</button>
                    </td>
                </tr>
            </table>

        </form>
        <ul id="warning-list">
        </ul>
        <div class="info">
            <img src="{{url('/')}}/img/website/phone.gif" alt="phone"><p class="infoLine">+381651234567</p>
        </div>
        <div class="info">
        <img src="{{url('/')}}/img/website/email.gif" alt="email"><p class="infoLine">workshop.and.travel@gmail.com</p>
        </div>
    </div>
</footer>