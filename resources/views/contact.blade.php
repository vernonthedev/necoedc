<x-app-layout meta-title="" meta-description="">

    <form action="{{ route('contact.store')}}" method="post">
        @csrf
        <input type="text" placeholder="Full Name" name="name">
        <input type="email" placeholder="Email" name="email">
        <select name="inquireType" id="">
            <option value="Technical Help">Technical Help</option>
            <option value="General Inquiry">General Inquiry</option>
            <option value="Personal Help">Personal Help</option>
        </select>
        <input type="text" placeholder="Phone Number" name="phoneNumber">
        <input type="text" placeholder="Message" name="message">
        <button type="submit">Submit </button>
    </form>


</x-app-layout>
