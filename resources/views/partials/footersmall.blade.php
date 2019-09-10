<footer class="footer" style="color: rgb(255, 255, 255); background-color: rgb(50, 50, 50); padding-top: 10px; padding-bottom: 10px;">
    <div class="row">
        <div class="col-8">
            <p class="float-left">Copyright (c) {{ Carbon\Carbon::today()->format('Y') }} David Domingues.</p>
        </div>
        <div class="col-4">
            <p class="float-right">
              <a href="{{ url('locale/pt') }}" hreflang="pt"><img src="{{ asset('images/Portugal-Flag-icon24.png') }}" height="20" width="20" title="Site em português" alt="Português" /></a>&nbsp;
              <a href="{{ url('locale/en') }}" hreflang="en"><img src="{{ asset('images/United-Kingdom-flag-icon.png') }}" height="20" width="20" title="Site in english" alt="English" /></a>&nbsp;
              <a href="{{ url('locale/fr') }}" hreflang="fr"><img src="{{ asset('images/France-Flag-icon24.png') }}" height="20" width="20" title="Site en français" alt="Français" /></a>&nbsp;
            </p>
        </div>
    </div>
</footer>