@extends('layouts.email')

@section('content')
<table align="center" border="0" cellpadding="0" cellspacing="0" width="600" style="border-collapse: collapse;">
    <tr>
        <td align="center" bgcolor="#ffffff"
            style="padding: 40px 0 30px 0; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
            <img src="cid:welcome-image" alt="Bienvenido a RunaCode" width="600"
                style="display: block; width: 100%; height: auto; border-radius: 5px;">
        </td>
    </tr>
    <tr>
        <td bgcolor="#ffffff" style="padding: 40px 30px 40px 30px; border-radius: 10px;">
            <table border="0" cellpadding="0" cellspacing="0" width="100%">
                <tr>
                    <td
                        style="color: #333333; font-family: Arial, 'Helvetica Neue', Helvetica, sans-serif; font-size: 24px;">
                        ¡Bienvenido a RunaCode, {{ $user->name }}!
                    </td>
                </tr>
                <tr>
                    <td
                        style="padding: 20px 0 30px 0; color: #666666; font-family: Arial, 'Helvetica Neue', Helvetica, sans-serif; font-size: 16px; line-height: 22px;">
                        Estamos emocionados de tenerte con nosotros. Tu camino hacia la digitalización y la presencia online efectiva comienza aquí. En RunaCode, nos especializamos en ofrecer soluciones web personalizadas, desde páginas web hasta sistemas complejos adaptados a tus necesidades.
                    </td>
                </tr>
                <tr>
                    <td
                        style="padding: 20px 0 30px 0; color: #666666; font-family: Arial, 'Helvetica Neue', Helvetica, sans-serif; font-size: 16px; line-height: 22px;">
                        Con una amplia experiencia en el desarrollo a medida utilizando Laravel, garantizamos soluciones que no solo cumplen sino que superan tus expectativas. Nuestro equipo de expertos está aquí para transformar tus ideas en realidad, asegurando que tu proyecto se destaque en el mundo digital.
                    </td>
                </tr>
                <tr>
                    <td
                        style="padding: 20px 0 30px 0; color: #666666; font-family: Arial, 'Helvetica Neue', Helvetica, sans-serif; font-size: 16px; line-height: 22px;">
                        Te invitamos a <strong>explorar nuestro portafolio</strong> y conocer más sobre cómo podemos apoyarte en alcanzar tus objetivos digitales. Si tienes alguna pregunta o deseas comenzar un proyecto con nosotros, nuestro equipo está listo para asistirte.
                    </td>
                </tr>
                <tr>
                    <td style="padding: 40px 0 30px 0; text-align: center;">
                        <a href="https://RunaCode.dev"
                            style="font-size: 20px; font-family: Arial, 'Helvetica Neue', Helvetica, sans-serif; color: white; text-decoration: none; padding: 15px 25px; border-radius: 5px; background-color: #3273dc; display: inline-block;">Explora
                            RunaCode Ahora</a>
                    </td>
                </tr>
                <tr>
                    <td
                        style="padding: 20px 0 30px 0; color: #666666; font-family: Arial, 'Helvetica Neue', Helvetica, sans-serif; font-size: 16px; line-height: 22px;">
                        Si no solicitaste información sobre nuestros servicios de desarrollo web, por favor ignora este correo electrónico o <a
                            href="mailto:support@RunaCode.dev" style="color: #3273dc; text-decoration: none;">haznoslo
                            saber</a>. Tu dirección de correo electrónico solo será utilizada para comunicaciones
                        importantes relacionadas con tu interés en nuestros servicios.
                    </td>
                </tr>
                <tr>
                    <td
                        style="color: #333333; font-family: Arial, 'Helvetica Neue', Helvetica, sans-serif; font-size: 16px;">
                        Agradecemos tu interés,<br><strong>El Equipo de RunaCode</strong>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
@endsection
