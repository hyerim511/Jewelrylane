<template>
    <section class="title">
        <h3>
            Booking
        </h3>
    </section>
    <form action="#" class="purpose">
        <section class="visit">
            <strong>
                Purpose of your visit
            </strong>
            <input type="checkbox" id="make" name="make" value="Make your jewelry">
            <input type="checkbox" id="discover" name="discover" value="Discover our collections">
            <input type="checkbox" id="care" name="care" value="Care service">
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
</template>

<script>
export default {
    name: "BookingPage"
}
</script>