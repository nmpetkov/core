<td><strong>{$name}</strong></td>

<td>{$description|safehtml}</td>

<td>{$typelbl}</td>

<td>{$statelbl}</td>

<td>
    {$nbuser}
    
    {if $canview eq true}
        - <a href="{route name='zikulagroupsmodule_user_memberslist' gid=$gid}" title="{gt text='Members list'}">{gt text='Members list'}</a>
    {/if}
</td>

{if $nbumax eq false or $nbumax eq 0}
    {gt text='Unlimited' assign='nbumax'}
{/if}
<td>{$nbumax}</td>

{if $state gt 0}
    {if $status eq true}
        <td><strong>{gt text='Pending'}</strong> | <a href="{route name='zikulagroupsmodule_user_membership' action="cancel" gid=$gid}" title="{gt text='Cancel'}">{gt text='Cancel'}</a></td>
    {else}
        {if $ismember eq true}
            <td><a href="{route name='zikulagroupsmodule_user_membership' action='unsubscribe' gid=$gid}" title="{gt text='Resign'}">{gt text='Resign'}</a></td>
        {else}
            {if $nbumax eq 0 || $nbumax gt $nbuser}
                <td><a href="{route name='zikulagroupsmodule_user_membership' action='subscribe' gid=$gid}" title="{gt text='Apply'}">{gt text='Apply'}</a></td>
            {else}
                <td>{gt text='Group has reached its maximum capacity'}</td>
            {/if}
        {/if}
    {/if}
{/if}
