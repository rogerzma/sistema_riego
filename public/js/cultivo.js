    const radioAbatimiento = document.getElementById('radio_abatimiento');
    const radioDias        = document.getElementById('radio_dias');
    const inputAbatimiento = document.getElementById('abatimiento');
    const diasChecks       = document.querySelectorAll('.dia-check');
    const diasLabels       = document.querySelectorAll('#dias_group label');

    function enableAbatimiento() {
        inputAbatimiento.disabled = false;
        inputAbatimiento.style.backgroundColor = '';
        inputAbatimiento.style.cursor = '';
        diasChecks.forEach(cb => {
            cb.disabled = true;
            cb.checked  = false;
        });
        diasLabels.forEach(l => { l.style.cursor = 'not-allowed'; l.style.opacity = '0.5'; });
    }

    function enableDias() {
        inputAbatimiento.disabled = true;
        inputAbatimiento.value    = '';
        inputAbatimiento.style.backgroundColor = '#e9ecef';
        inputAbatimiento.style.cursor = 'not-allowed';
        diasChecks.forEach(cb => { cb.disabled = false; });
        diasLabels.forEach(l => { l.style.cursor = 'pointer'; l.style.opacity = '1'; });
    }

    radioAbatimiento.addEventListener('change', enableAbatimiento);
    radioDias.addEventListener('change', enableDias);