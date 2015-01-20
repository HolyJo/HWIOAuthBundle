Step 2x: Setup Stripe
=========================
First you will have to register your application in Stripe's ["Api Apps Register"](https://dashboard.stripe.com/account/applications).

Next configure a resource owner of type `stripe` with appropriate `client_id` and `client_secret`.

```yaml
# app/config.yml

hwi_oauth:
    resource_owners:
        any_name:
            type:          stripe
            client_id:     <client_id>
            client_secret: <client_secret>
```

When you're done. Continue by configuring the security layer or go back to setup more resource owners.

- [Step 2: Configuring resource owners (Facebook, GitHub, Google, Windows Live and others](../2-configuring_resource_owners.md)
- [Step 3: Configuring the security layer](../3-configuring_the_security_layer.md).
