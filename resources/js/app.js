import './bootstrap';

import Alpine from 'alpinejs';
import focus from '@alpinejs/focus';
window.Alpine = Alpine;

Alpine.plugin(focus);

Alpine.start();


$(document).ready(function() {
    $('#rooms').change(function() {
        let numberOfRooms = $(this).val();
        $('#travelers').empty();

        if (numberOfRooms > 0) {
            for (let i = 1; i <= numberOfRooms; i++) {
                $('#travelers').append(`
                    <h5>Room ${i}</h5>
                    <div class="mb-3">
                        <label for="adults_${i}" class="form-label">Number of Adults</label>
                        <select class="form-control" id="adults_${i}" name="adults_${i}" required>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="children_7_12_${i}" class="form-label">Number of Children (7-12)</label>
                        <select class="form-control" id="children_7_12_${i}" name="children_7_12_${i}">
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="children_3_6_${i}" class="form-label">Number of Children (3-6)</label>
                        <select class="form-control" id="children_3_6_${i}" name="children_3_6_${i}">
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="infants_${i}" class="form-label">Number of Infants</label>
                        <select class="form-control" id="infants_${i}" name="infants_${i}">
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </div>
                `);
            }
        }
    });

    $('#reserveForm').on('submit', function(e) {
        e.preventDefault();

        $.ajax({
            url: "{{ route('reserve.store') }}",
            type: "POST",
            data: $(this).serialize(),
            success: function(response) {
                alert(response.success);
                $('#reserveModal').modal('hide');
            },
            error: function(response) {
                alert('An error occurred. Please try again.');
            }
        });
    });
});
