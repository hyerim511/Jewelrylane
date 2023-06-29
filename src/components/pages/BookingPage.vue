<template>
    <section class="booking">
        <aside>
            <h3>
                Booking
            </h3>
        </aside>
        <form class="booking-form">
            <section class="purpose">
                <h4>
                    Purpose of your visit
                </h4>
                <div>
                    <label for="make">Make your jewelry</label>
                    <input type="checkbox" id="make" name="purpose" value="Make your jewelry">
                    <input type="checkbox" id="discover" name="purpose" value="Discover our collections">
                    <input type="checkbox" id="care" name="purpose" value="Care service">
                </div>
            </section>
            <section class="appointment">
                <strong>
                    Appointment details
                </strong>
                <input type="date" id="appointment" name="appointment">
                <input type="time" name="appt" id="appt">
                <p>Complementary Comments</p>
                <textarea name="comments" id="comments"></textarea>
            </section>

            <section class="personalInfo">
                <strong>
                    Personal information
                </strong>
                <input type="text" name="fullName" id="fullName" placeholder="Name">
                <input type="email" name="email" id="email" placeholder="Email">
                <input type="tel" name="phone" id="phone" placeholder="Phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}">
            </section>

            <input type="submit" value="Make an appointment">
        </form>
    </section>
</template>

<script>
export default {
    name: "BookingPage"
}
</script>